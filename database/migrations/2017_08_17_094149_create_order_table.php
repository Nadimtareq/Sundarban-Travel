<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id')->unsigned();
            $table->integer('commonpack_id')->unsigned()->nullable();
            $table->integer('groupfare_id')->unsigned()->nullable();
            $table->integer('specialpackage_id')->unsigned()->nullable();
            $table->longtext('message')->nullable();
            $table->tinyInteger('status'); /*[0-pending, 1-confirmed]*/
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
        Schema::dropIfExists('order');
    }
}
