<?php

namespace App\Table;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Reserve extends Authenticatable
{
    protected $table = 'reserve_tb';

    protected $fillable = [
        'reserve_id',
        'shop_id',
        'user_id',
        'number',
        'reserve_time',
        'dlflag'
    ];
}
