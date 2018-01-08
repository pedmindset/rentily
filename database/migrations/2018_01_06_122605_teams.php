<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Teams.
 *
 * @author  The scaffold-interface created at 2018-01-06 12:26:05am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Teams extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('teams',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('name');
        
        $table->String('description')->nullable();
        
        $table->String('slug')->nullable();
        
        /**
         * Foreignkeys section
         */
        
        $table->integer('user_id')->unsigned()->nullable();
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        
        
        $table->timestamps();
        
        
        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('teams');
    }
}
