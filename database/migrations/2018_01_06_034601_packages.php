<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Packages.
 *
 * @author  The scaffold-interface created at 2018-01-06 03:46:02am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Packages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('packages',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('name');
        
        $table->String('description')->nullable();
        
        $table->String('status');
        
        /**
         * Foreignkeys section
         */
        
        $table->integer('company_id')->unsigned()->nullable();
        $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
        
        
        $table->timestamps();
        
        
        $table->softDeletes();
        
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
        Schema::drop('packages');
    }
}
