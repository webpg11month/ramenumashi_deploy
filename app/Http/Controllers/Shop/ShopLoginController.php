<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Table\Shop;
use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

// ユーザー認証
use App\Http\Requests\ShopLoginRequest;

class ShopLoginController extends Controller
{
    
    public function shopLogin(ShopLoginRequest $req){
        $data = $req->all();
        $shop_id =Shop::where('shop_id',$req->shop_id)->value('shop_id');
        $password = Shop::where('shop_id',$req->shop_id)->value('password');
        Log::info('AAAAAAAAAA');
        $shop_status = Shop::where('shop_id',$req->shop_id)->value('dlflag');
        if($shop_status === '3'){
            Log::info('お店退会者');
            return redirect()->back();
        }

        if(Hash::check($req->password, $password)){
            $credentials = $req->only('shop_id', 'password');

            Log::info($credentials);
            if(Auth::guard('shop')->attempt($credentials)){
                Log::info('ログイン成功');
                $shop = $req->all();
                return view('/message/resultshoplogin',compact('shop'));
            }else {
                Log::info('お店IDが違う');
                return redirect()->back();
            }
        }else{
            Log::info('パスワードが違う');
            return redirect()->back();
        }   
    }

    public function logout(){
        
        Auth::logout();
        \Log::debug('ログアウト成功');
        return redirect('/');
    }
}
