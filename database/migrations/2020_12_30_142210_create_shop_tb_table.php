<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopTbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_tb', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('shop_id',16)->unique(); 
            $table->string('shop_name',255);
            $table->string('shop_tel',20)->nullable();                          
            $table->string('password',255);
            $table->string('shop_email',255)->unique();    
            $table->string('area_id',255);      
            $table->string('shop_address',255);       
            $table->bigInteger('seat');             
            $table->bigInteger('show_data');    
            $table->enum('dlflag', ['1','2','3']);
            $table->string('avarage_price');      
            $table->string('img',255)->nullable();
            $table->string('img1',255)->nullable();
            $table->string('img2',255)->nullable();
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
        Schema::dropIfExists('shop_tb');
    }
}
