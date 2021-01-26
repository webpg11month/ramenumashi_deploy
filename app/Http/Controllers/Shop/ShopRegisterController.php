<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\ShopLogic;
use Illuminate\Support\Facades\Log;

// ユーザー認証
use App\Http\Requests\ShopRegisterRequest;

class ShopRegisterController extends Controller
{

    public function shopRegisterResult(ShopRegisterRequest $req){
        $shoplisttable = new ShopLogic();
        return $shoplisttable->shopTableAdd($req);
    }
}
