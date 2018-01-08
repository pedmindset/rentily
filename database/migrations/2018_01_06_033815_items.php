<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Items.
 *
 * @author  The scaffold-interface created at 2018-01-06 03:38:15am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Items extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('items',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('name');
        
        $table->String('description')->nullable();
        
        $table->integer('quantity');
        
        $table->biginteger('price_per_hour')->nullable();

        $table->biginteger('price_per_day')->nullable();
        
        $table->String('status');
        
        /**
         * Foreignkeys section
         */
        
        $table->integer('category_id')->unsigned()->nullable();
        $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        
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
        Schema::drop('items');
    }
}
