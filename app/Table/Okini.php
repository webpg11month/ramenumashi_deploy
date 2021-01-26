<?php

namespace App\Table;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/*
お気に入り登録処理
手順１：お気に入りテーブル生成
手順２：お店ID(uni)とおきにID(pri)とユーザーIDをキーとする
手順３：
*/
class Okini extends Authenticatable
{
    protected $table = 'okini_tb';

    protected $fillable = [
        'okini_id',
        'shop_id',
        'user_id',
        'dlflag',
    ];
}
