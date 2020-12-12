<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pivot', function (Blueprint $table) {
            $table->id('idpenugasan');
            $table->unsignedBigInteger('idruang');
            $table->unsignedBigInteger('idcs');
            $table->string('status')->nullable();
            $table->string('bukti_1')->nullable();
            $table->string('bukti_2')->nullable();
            $table->string('bukti_3')->nullable();
            $table->string('bukti_4')->nullable();
            $table->string('bukti_5')->nullable();
            $table->datetime('tgl_penugasan');
            $table->timestamps();

            $table->foreign('idruang')
            ->references('id')->on('ruang')
            ->onDelete('cascade');

            $table->foreign('idcs')
            ->references('id')->on('users')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pivot');
    }
}
