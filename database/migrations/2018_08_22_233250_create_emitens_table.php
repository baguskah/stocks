<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmitensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emitens', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('kode');
            $table->string('visi')->nullable();
            $table->string('misi')->nullable();
            $table->string('bidang')->nullable();
            $table->text('deskripsi')->nullable();
            $table->boolean('syariah');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emitens');
    }
}
