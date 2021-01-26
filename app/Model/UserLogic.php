<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Table\User;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserLogic extends Model
{
    public function userTableAdd($request){
        $user = $request->all();

        $userinfos = User::where('email', $user['email'])->exists();
  
        $password = Hash::make($user['password']);
        
        if($userinfos == '1'){
          $message = "すでにユーザー登録されております。";
          return view('resultregister',compact('message'));
        }

        $user_infos = User::create([
          'user_id' => $user['user_id'],
          'user_name' => $user['user_name'],
          'email' => $user['email'],
          'tel' => $user['tel'],
          'age' => $user['age'],
          'sex' => $user['sex'],
          'password' => $password,
          'dlflag'=> 1
        ]);

        $message = "ユーザー追加しました。";

        return view('/message/resultregister',compact('message'));

    }
}
