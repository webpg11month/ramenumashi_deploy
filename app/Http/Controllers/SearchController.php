<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Table\Shop;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class SearchController extends Controller
{
    //インデックス画面遷移 
    public function search(Request $req){
        $shop_name = $req->input('shop');
        $shop_address = $req->input('area');

        #クエリ生成
        $query = Shop::query();



        #もしキーワードがあったら
        if(!empty($shop_name)){
            $query->where('shop_name','like','%'.$shop_name.'%');
        }
        if(!empty($shop_address)){
            $query->where('shop_address','like','%'.$shop_address.'%');
        }
        
        $shops = $query->orderBy('created_at', 'desc')->paginate(5);
        

        // return view('/shop',compact('shops'));
        return view('/shop')->with('shops',$shops)
        ->with('shop_name',$shop_name)
        ->with('shop_address',$shop_address)
        ->with('message','ユーザーリスト');
    }
}