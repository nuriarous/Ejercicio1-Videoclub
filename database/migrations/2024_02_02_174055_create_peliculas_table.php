<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Peliculas', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('year',8);
            $table->string('director',64);
            $table->string('poster');
            $table->boolean('rented',false);
            $table->text('synopsis');
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
        Schema::dropIfExists('Pelicula');
    }
}
