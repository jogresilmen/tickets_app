<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickests', function (Blueprint $table) {
            $table->id();
            $table->string('tickets')->nullable();
            $table->string('name')->nullable();
            $table->unsignedBigInteger('cola_id');
            $table->foreign('cola_id')->references('id')->on('colas');
            $table->integer('Duracion')->nullable();
            $table->unsignedBigInteger('status_id');
            $table->foreign('status_id')->references('id')->on('types');
            $table->integer('marca');
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
        Schema::dropIfExists('tickests');
    }
};
