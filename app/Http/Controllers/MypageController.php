<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Table\User;
use App\Table\Okini;
use App\Table\Reserve;
use Illuminate\Support\Facades\Log;
use Auth;
use DB;

class MypageController extends Controller
{
    //indexの画面遷移 add Start
    public function mypage(){
        $user = Auth::user(); 
        $user_id = $user->user_id;
        #予約データ一覧
        $reserves = DB::table('reserve_tb')
                //カラムデータ処理
                // ->select('reserve_tb.reserve_id','shop_tb.img','shop_tb.shop_name','shop_tb.shop_id','reserve_tb.dlflag')
                ->where('reserve_tb.dlflag',1)
                ->where('reserve_tb.user_id',$user_id)
                ->join('shop_tb','reserve_tb.shop_id','=','shop_tb.shop_id')
                ->join('user_tb','reserve_tb.user_id','=','user_tb.user_id')
                ->orderBy('reserve_tb.created_at', 'desc')
                ->paginate(5);
        
        //お気に入り一覧
        $okinis = DB::table('okini_tb')
                //カラムデータ処理
                // ->select('reserve_tb.reserve_id','shop_tb.img','shop_tb.shop_name','shop_tb.shop_id','reserve_tb.dlflag')
                ->where('okini_tb.dlflag',1)
                ->where('okini_tb.user_id',$user_id)
                ->join('shop_tb','okini_tb.shop_id','=','shop_tb.shop_id')
                ->join('user_tb','okini_tb.user_id','=','user_tb.user_id')
                ->orderBy('okini_tb.created_at', 'desc')
                ->paginate(5);

        return view('/mypage',compact('reserves','okinis','user'));
    }

    //予約詳細一覧
    public function detail(Request $req){
        $shopinfo = $req->all();
        //ユーザーID $req['user_id']でも取得可能だが、ログイン認証の方がよい
        $user = Auth::user();
        $user_id = $user->user_id;
        //予約ID
        $reserve_id = $req['reserve_id'];

        $reserves = DB::table('reserve_tb')
        ->where('reserve_tb.dlflag',1)
        ->where('reserve_tb.user_id',$user_id)
        ->where('reserve_tb.reserve_id',$reserve_id)
        ->join('shop_tb','reserve_tb.shop_id','=','shop_tb.shop_id')
        ->join('user_tb','reserve_tb.user_id','=','user_tb.user_id')->first();
        
        return view('/mypage/detail',compact('reserves'));
    }

    //キャンセル処理
    public function delete(Request $req){
        $reserve_id = $req['reserve_id'];
        Reserve::where('reserve_id',$reserve_id)->update(['dlflag'=>3]);
        return view('/message/resultcancel');
    }

    //お気に入り登録
    public function okini(Request $req){
        $user = Auth::user();
        $user_id = $user->user_id;
        $shop_id = $req['shop_id'];

        $okiniinfos = Okini::where('shop_id', $req['shop_id'])->exists();
        if(!$okiniinfos){
            $user_infos = Okini::create([
                'shop_id' => $req['shop_id'],
                'user_id' => $user_id,
                'dlflag'=> 1
            ]);
        }else {
            Log::info('すでにお気に入り登録されています');
            return redirect()->back();
        }

        return view('/message/resultokini');
    }

    //お気に入りお店詳細一覧
    public function okiniDetail(Request $req){
        $shopinfo = $req->all();
        //ユーザーID $req['user_id']でも取得可能だが、ログイン認証の方がよい
        $user = Auth::user(); 
        $user_id = $user->user_id;
        //お気に入りID
        $okini_id = $req['okini_id'];

        $okinis = DB::table('okini_tb')
        ->where('okini_tb.dlflag',1)
        ->where('okini_tb.user_id',$user_id)
        ->where('okini_tb.okini_id',$okini_id)
        ->join('shop_tb','okini_tb.shop_id','=','shop_tb.shop_id')
        ->join('user_tb','okini_tb.user_id','=','user_tb.user_id')->first();
        
        return view('/mypage/okinidetail',compact('okinis'));
    }

    //お気に入り解除処理
    public function okiDelete(Request $req){
        $okini_id = $req['okini_id'];
        Okini::where('okini_id',$okini_id)->update(['dlflag'=>3]);
        return view('/message/resultokinicancel');
    }
}
