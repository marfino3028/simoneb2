<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai', function (Blueprint $table) {
            $table->id();
            $table->string('ipk');
            $table->string('ips');
            $table->string('tahun');
            $table->foreignId('users_id');
            $table->foreign('users_id')->references('id')->on('users')->nullable();
            $table->foreignId('semester_id');
            $table->foreign('semester_id')->references('id')->on('semester')->nullable();
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
        Schema::dropIfExists('nilai');
    }
}
