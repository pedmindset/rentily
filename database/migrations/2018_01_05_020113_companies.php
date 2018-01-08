<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Companies.
 *
 * @author  The scaffold-interface created at 2018-01-05 02:01:13am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Companies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('companies',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('name');
        
        $table->String('logo')->nullable();
        
        $table->String('email')->unique(); 
        
        $table->biginteger('phone1');
        
        $table->biginteger('phone2')->nullable();
        
        $table->String('address')->nullable();
        
        $table->String('city')->nullable();
        
        $table->String('region')->nullable();
        
        $table->String('country')->nullable();
        
        /**
         * Foreignkeys section
         */
        
        $table->integer('user_id')->unsigned()->nullable();
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        
        
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
        Schema::drop('companies');
    }
}
