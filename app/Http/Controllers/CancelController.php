<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Table\User;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\UserCancelRequest;

use Illuminate\Support\Facades\Auth;

class CancelController extends Controller
{
    public function userCancel(UserCancelRequest $req){

        //emailとpasswordを取得
        $email =User::where('email',$req->email)->value('email');
        $password = User::where('email',$req->email)->value('password');
        
        //削除フラグを変更
        User::where('email',$req->email)->update(['dlflag'=>3]);
        
        //ログアウト
        Auth::logout();
        
        //画面遷移
        return view('/message/cancellationresult');
    }
}
