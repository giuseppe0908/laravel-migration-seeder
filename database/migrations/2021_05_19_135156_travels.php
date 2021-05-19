<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Travels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('travels',function (Blueprint $table){
           $table->id('id');
           $table->string('location');
           $table->date('day');
           $table->float('price',8,2);
           $table->string('name_hotel');
           // $table->date('updated_at');
           // $table->date('created_at');
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
         Schema::drop('travels');
     }
}
