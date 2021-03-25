<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable(false);
            $table->enum('status', ['Alive', 'Dead', 'Unknown'])->nullable(false);
            $table->string('species');
            $table->string('type');
            $table->enum('gender', ['Male', 'Female', 'Genderless', 'Unknown']);
            $table->json('origin');
            $table->json('location')->nullable(false);
            $table->string('image')->nullable(false);
            $table->json('episode');
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
        Schema::dropIfExists('characters');
    }
}
