<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Table\Shop;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ShopLogic extends Model
{
    public function shopTableAdd($req){
        $shop = new Shop;
        $shop = $req->all();
        Log::info($shop);
        $img = $req->file('img');
        $img1 = $req->file('img1');
        $img2 = $req->file('img2');
        if($img !== null){
            $img = $img->store('public/image');
            $img = str_replace('public/image/', '', $img);
        }
        if($img === null) {
            $img = 'dumy1.png';
        }
        if($img1 !== null){
            $img1 = $img1->store('public/image');
            $img1 = str_replace('public/image/', '', $img1);
        }
        if($img2 !== null){
            $img2 = $img2->store('public/image');   
            $img2 = str_replace('public/image/', '', $img2);
        }
          
        $shopinfos = Shop::where('shop_email', $shop['shop_email'])->exists();
        $shoppass = Hash::make($shop['password']);
        Log::info($shopinfos);
        Log::info($shoppass);
        Log::info($shop['avarage_price']);
        
        $shop_infos = Shop::create([
            'shop_id' => $shop['shop_id'],
            'password' => $shoppass,
            'shop_email' => $shop['shop_email'],
            'area_id' => '1',
            'shop_name' => $shop['shop_name'],
            'shop_address' => $shop['shop_address'],
            'seat' => 1,
            'show_data' => 0,
            'dlflag' => 1,
            'avarage_price' => $shop['avarage_price'],
            'img'=> $img,
            'img1'=> $img1,
            'img2'=> $img2
        ]);

        return view('message/resultshopregister');
    }
}
