<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function (Blueprint $table) {
          $table->increments('id');
          $table->timestamps();
          $table->integer('emiten_id')->unsigned();
          $table->foreign('emiten_id')->references('id')->on('emitens')->onDelete('cascade');
          $table->year('year');
          $table->string('period');
          $table->integer('net_income');
          $table->float('change')->nullable();
          $table->integer('last_price')->nullable();
          $table->integer('equity')->nullable();
          $table->integer('shares')->nullable();
          $table->integer('employer')->nullable();
          $table->integer('eps')->nullable();
          $table->integer('market_cap')->nullable();
          $table->float('per')->nullable();
          $table->float('pbv')->nullable();
          $table->integer('low')->nullable();
          $table->float('per_low')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('histories');
    }
}
