<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetLibrariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('set_libraries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->string('name', 120);
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('set_categories')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('set_libraries');
    }
}
