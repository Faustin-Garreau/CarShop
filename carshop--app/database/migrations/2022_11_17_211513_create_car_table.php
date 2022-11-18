<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car', function (Blueprint $table) {
            $table->id();
            $table->string('gearbox');
            $table->string('immat');
            $table->string('color');
            $table->integer('door_number');
            $table->decimal('kilometers');
            $table->integer('nb_places');
            $table->boolean('clim');
            $table->string('oil');
            $table->string('categories');
            $table->text('image');
            $table->decimal('rate');
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
        Schema::dropIfExists('car');
    }
};
