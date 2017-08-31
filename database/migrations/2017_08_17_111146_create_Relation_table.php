<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('Relation', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });*/

        Schema::table('order', function (Blueprint $table) {
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('commonpack_id')->references('id')->on('common_pack')->onDelete('cascade')->onUpdate('cascade');
                  $table->foreign('groupfare_id')->references('id')->on('groupfare')->onDelete('cascade')->onUpdate('cascade');
                  $table->foreign('specialpackage_id')->references('id')->on('specialpackage')->onDelete('cascade')->onUpdate('cascade');
        });


      Schema::table('feedback', function (Blueprint $table) {
            $table->foreign('commonpack_id')->references('id')->on('common_pack')->onDelete('cascade')->onUpdate('cascade');
           
        });
  
       Schema::table('specialpackage_customer', function (Blueprint $table) {
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('specialpackage_id')->references('id')->on('specialpackage')->onDelete('cascade')->onUpdate('cascade');
                  
        });

      
      Schema::table('groupfare', function (Blueprint $table) {
           
            $table->foreign('groupfarecat_id')->references('id')->on('groupfare_cat')->onDelete('cascade')->onUpdate('cascade');
                  
        });
      
       Schema::table('common_pack', function (Blueprint $table) {
           
            $table->foreign('commoncat_id')->references('id')->on('common_cat')->onDelete('cascade')->onUpdate('cascade');
                  
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Relation');
    }
}
