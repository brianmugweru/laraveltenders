<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTenderbidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenderbids', function(Blueprint $table){
            $table->engine='InnoDB';
            $table->integer('user_id')->unsigned()->primary();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('tender_id')->unsigned()->primary();
            $table->foreign('tender_id')->references('id')->on('tenders');
            $table->double('bid',15,8);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
