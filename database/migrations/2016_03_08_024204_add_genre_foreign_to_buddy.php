<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGenreForeignToBuddy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('buddies', function($table){
            $table->integer('genre_id')->unsigned();
            $table->foreign('genre_id')->references('id')->on('genre');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('buddies', function($table){
            $table->dropForeign('genre_id');
        });
    }
}
