<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_tb', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id',16)->unique();  
            $table->string('user_name',255);            
            $table->string('email',255)->unique();    
            $table->string('tel',20)->nullable();     
            $table->string('age',20)->nullable();
            $table->enum('sex', ['1','2','3']);       
            $table->string('password',255);
            $table->enum('dlflag', ['1','2','3']);      
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
        Schema::dropIfExists('user_tb');
    }
}
