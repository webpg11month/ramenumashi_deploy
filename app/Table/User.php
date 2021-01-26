<?php

namespace App\Table;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/*
モデルのデータを取得している
接続されたdbのクラスのスネークケーステーブルを取得する
User_infos→UserInfo
下記に処理をする点
https://readouble.com/laravel/7.x/ja/eloquent.html
上記urlにて確認
例えばプライマリーはidで設定されてるので複合キーをする場合は
追加でprotected $table = '（作成プライマリーカラム名）';を書くとよい
*/
class User extends Authenticatable
{
    protected $table = 'user_tb';

    protected $fillable = [
        'user_id',
        'user_name',
        'email',
        'age',
        'sex',
        'password',
    ];
}
