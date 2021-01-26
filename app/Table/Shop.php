<?php

namespace App\Table;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Shop extends Authenticatable
{
    protected $table = 'shop_tb';

    protected $fillable = [
        'shop_id' ,
        'password',
        'shop_email',
        'area_id',
        'shop_name',
        'shop_address',
        'seat',
        'show_data',
        'dlflag',
        'avarage_price',
        'img',
        'img1',
        'img2'
    ];
}
