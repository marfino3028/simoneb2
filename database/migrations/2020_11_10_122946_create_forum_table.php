<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forum', function (Blueprint $table) {
            $table->id();
            $table->date('tgl');
            $table->string('foto');
            $table->string('nama');
            $table->foreignId('semester_id');
            $table->foreignId('users_id');
            $table->foreign('users_id')->references('id')->on('users')->nullable();
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
        Schema::dropIfExists('forum');
    }
}
