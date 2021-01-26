<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOkiniTbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('okini_tb', function (Blueprint $table) {
            $table->bigIncrements('okini_id');
            $table->string('shop_id',16);
            $table->string('user_id',16);
            $table->enum('dlflag', ['1','2','3']);//未登録・登録・削除
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('okini_tb');
    }
}
