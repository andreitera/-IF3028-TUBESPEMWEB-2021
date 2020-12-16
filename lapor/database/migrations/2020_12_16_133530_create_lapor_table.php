<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lapor', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('user_id');
            $table->foreignId('laporan_type_id');
            $table->string('title', 200);
            $table->longtext('laporan');
            $table->date('tgl_kejadian');
            $table->foreignId('location_id');
            $table->foreignId('instansi_tujuan_id');
            $table->foreignId('category_id');
            $table->longText('lampiran')->nullable();
            $table->tinyInteger('anonim')->default(1);
            $table->tinyInteger('rahasia')->default(0);
            $table->foreignId('status_id');
            $table->timestamps();
            $table->primary(['user_id', 'laporan_type_id', 'location_id', 'instansi_tujuan_id', 'category_id', 'status_id']);
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('laporan_type_id')->references('id')->on('set_libraries')->cascadeOnDelete();
            $table->foreign('location_id')->references('id')->on('set_cities')->cascadeOnDelete();
            $table->foreign('instansi_tujuan_id')->references('id')->on('set_provincies')->cascadeOnDelete();
            $table->foreign('category_id')->references('id')->on('set_libraries')->cascadeOnDelete();
            $table->foreign('status_id')->references('id')->on('set_libraries')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lapor');
    }
}
