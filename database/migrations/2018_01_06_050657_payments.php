<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Payments.
 *
 * @author  The scaffold-interface created at 2018-01-06 05:06:57pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Payments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('payments',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('title')->nullable();
        
        $table->String('description')->nullable();
        
        $table->String('payment_type')->nullable();
        
        $table->biginteger('amount')->nullable();
        
        $table->String('method')->nullable();
        
        $table->longText('note')->nullable();
        
        /**
         * Foreignkeys section
         */
        
        $table->integer('invoice_id')->unsigned()->nullable();
        $table->foreign('invoice_id')->references('id')->on('invoices')->onDelete('cascade');
        
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
        Schema::drop('payments');
    }
}
