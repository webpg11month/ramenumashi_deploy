<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Table\Shop;
use DB;
class IndexController extends Controller
{
    //ログインへ画面遷移 
    public function login(){
        return view('login');
    }

    //インデックス画面遷移 
    public function index(){
        $shop = new Shop;
        //アクセス数処理
        //おすすめランキング
        //1位のデータ取得
        $show_data =Shop::select('id')
                    ->orderBy('show_data','desc')
                    ->orderBy('id','desc')
                    ->offset(0)
                    ->limit(1)
                    ->get();
        $show_data =preg_replace('/[^0-9]/', '', $show_data);
        $img = Shop::where('id',$show_data)->value('img');
        //2位のデータ取得
        $show_data1 =Shop::select('id')
                    ->orderBy('show_data','desc')
                    ->orderBy('id','desc')
                    ->offset(1)
                    ->limit(1)
                    ->get();
        $show_data1 =preg_replace('/[^0-9]/', '', $show_data1);
        $img1 = Shop::where('id',$show_data1)->value('img');
        //3位のデータ取得
        $show_data2 =Shop::select('id')
                    ->orderBy('show_data','desc')
                    ->orderBy('id','desc')
                    ->offset(2)
                    ->limit(1)
                    ->get();
        $show_data2 =preg_replace('/[^0-9]/', '', $show_data2);
        $img2 = Shop::where('id',$show_data2)->value('img');
        
        Log::info($img);
        Log::info($img1);
        Log::info($img2);

        return view('/index',compact('img','img1','img2'));
    }

    //インデックス画面遷移 
    public function register(){
        return view('register');
    }

    //umashiについて画面遷移 
    public function umashi(){
        return view('umashi');
    }

    //問い合わせ画面遷移 
    public function contact(){
        return view('contact');
    }

    //ヘルプ画面遷移 
    public function help(){
        return view('help');
    }

    //利用規約画面遷移 
    public function role(){
        return view('role');
    }

    //プライバシー画面遷移 
    public function privacy(){
        return view('privacy');
    }
    //プライバシー３画面遷移 
    public function privacy3(){
        return view('privacy3');
    }
    //解約画面遷移 
    public function cancellation(){
        return view('cancellation');
    }
    //お店画面遷移 
    public function shop(){
        return view('shop');
    }
    //お店登録画面遷移 
    public function shopinfo(){
        return view('shop/shop_info');
    }
    //お店新規登録画面遷移 
    public function shopRegister(){
        return view('shop/shop_register');
    }
    //お店ログイン画面遷移 
    public function shopLogin(){
        Log::info('test11');
        return view('/shop/shop_login');
    }
    
}
