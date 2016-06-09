<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaDirigente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dirigente', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('titulodocente_id')->unsigned();
            $table->timestamps();

            $table->foreign('titulodocente_id')->references('id')->on('titulodocente')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('dirigente');
    }
}
