<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Customers.
 *
 * @author  The scaffold-interface created at 2018-01-06 01:38:03pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Customers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('customers',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('name');
        
        $table->String('email')->nullable();
        
        $table->biginteger('phone')->nullable();
        
        $table->String('address')->nullable();
        
        $table->String('city')->nullable();
        
        $table->String('region')->nullable();
        
        $table->String('postal_code')->nullable();
        
        $table->String('country')->nullable();
        
        $table->biginteger('card_number')->nullable();
        
        $table->integer('ccv')->nullable();
        
        $table->date('exp_date')->nullable();
        
        $table->String('password')->nullable();
        
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
        Schema::drop('customers');
    }
}
