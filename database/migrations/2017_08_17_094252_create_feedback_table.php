<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname');
            $table->string('email')->nullable( );
            $table->string('phone')->nullable();
            $table->string('subject')->nullable();
            $table->integer('commonpack_id')->unsigned()->nullable();
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
        Schema::dropIfExists('feedback');
    }
}
