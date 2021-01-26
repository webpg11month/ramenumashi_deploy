<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Table\Reserve;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ReserveController extends Controller
{
    //ログインしているユーザーのみ予約可能
    public function __construct(){
        $this->middleware('guest');
    }
    
    public function reserve(Request $req)
    {   
        //お店情報を取得
        //予約画面に反映
        $user_id = $req->shop_id;
        //Log::info($user_id);
        return view('/reserve',compact('user_id'));
    }

    public function reserveResult(Request $req){
        $data = $req->all();
        //ログイン中のユーザーID取得
        $user_id = Auth::user()->user_id;
        //お店ID
        $shop_id = $req->shop_id;
        Log::info($user_id);
        Log::info($shop_id);
        //予約時間
        $reserve_time = $req->date ." ". $req->time;
        //欲しいデータyyyy/mm/dd/ hh:mm:ss
        Log::info($reserve_time);
        //お店情報と時間が両方一致した場合のSQL文
        //ユーザーIDとお店IDと予約時間の値があるレコードの存在可否
        $reserveinfo = Reserve::where('reserve_time', $reserve_time)
                    ->where('shop_id', $shop_id)
                    ->where('user_id', $user_id)
                    ->exists();
        Log::info($reserveinfo);
        //存在しない場合処理が流れる
        if(!$reserveinfo){
            $reserve_infos = Reserve::create([
                'shop_id' => $shop_id,
                'user_id' => $user_id,
                'number' => $req->number,
                'reserve_time' => $reserve_time,
                'dlflag'=> 1
            ]);
        }else if($reserveinfo === null || $reserveinfo === ""){
            Log::info('その他エラー');
            return redirect()->back();
        }else {
            Log::info('設定しなおして下さい');
            return redirect()->back();
        }
        //上記内容のデータがあるかの判定 trueの場合は処理が完了する
        //多重予約対策　占有ロック　共有ロック
        return view('/message/resultreserve');
    }
}
