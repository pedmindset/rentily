<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Categories.
 *
 * @author  The scaffold-interface created at 2018-01-06 01:26:48am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Categories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('categories',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('name');
        
        $table->String('description')->nullable();
        
        
        /**
         * Foreignkeys section
         */
        
        $table->integer('company_id')->unsigned()->nullable();
        $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
        
        
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
        Schema::drop('categories');
    }
}
