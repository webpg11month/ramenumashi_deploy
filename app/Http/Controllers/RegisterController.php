<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Model\UserLogic;
use Illuminate\Support\Facades\Log;

// ユーザー認証
use App\Http\Requests\UserRegisterRequest;


class RegisterController extends Controller
{ 
    /**
    * 
    * 
    * @param array $user
    * @param  $user_tb
    * @param string $message
    *
    * @return message
    **/
    public function userRegister(UserRegisterRequest $request)
    { 
      $userlisttable = new UserLogic();
      return $userlisttable->userTableAdd($request);
    }   
}
