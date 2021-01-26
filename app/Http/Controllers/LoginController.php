<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Table\User;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\UserLoginRequest;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class LoginController extends Controller
{    
    //user:tsss@test.ne.jp
    //pass:mashmash! 

    public function userLogin(UserLoginRequest $req){
        $data = $req->all();
        $email =User::where('email',$req->email)->value('email');
        $password1 = User::where('email',$req->email)->value('password');

        $user_status = User::where('email',$req->email)->value('dlflag');
        if($user_status === '3'){
            Log::info('退会者');
            return redirect()->back();
        }

        if(Hash::check($req->password, $password1)){
            $credentials = $req->only('email', 'password');

            Log::info($credentials);
            if(Auth::attempt($credentials)){
                Log::info('ログイン成功');
                $user = $req->all();
                $req->session()->regenerateToken();
                return view('/message/resultlogin',compact('user'));
            }else {
                Log::info('メールアドレスが違う');
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
