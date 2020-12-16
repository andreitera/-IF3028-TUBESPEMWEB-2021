<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('set_cities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('province_id');
            $table->string('name', 80);
            $table->timestamps();
            $table->primary(['province_id']);
            $table->foreign('province_id')->references('id')->on('set_provincies')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('set_cities');
    }
}
