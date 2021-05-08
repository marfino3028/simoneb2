<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tahsin_id');
            $table->foreign('tahsin_id')->references('id')->on('tahsin')->nullable();
            $table->foreignId('sosial_id');
            $table->foreign('sosial_id')->references('id')->on('sosial')->nullable();
            $table->foreignId('prestasi_id');
            $table->foreign('prestasi_id')->references('id')->on('prestasi')->nullable();
            $table->foreignId('org_mhs_id');
            $table->foreign('org_mhs_id')->references('id')->on('org_mhs')->nullable();
            $table->foreignId('mentoring_id');
            $table->foreign('mentoring_id')->references('id')->on('mentoring')->nullable();
            $table->foreignId('karya_id');
            $table->foreign('karya_id')->references('id')->on('karya')->nullable();
            $table->foreignId('forum_id');
            $table->foreign('forum_id')->references('id')->on('forum')->nullable();
            $table->foreignId('beasiswa_id');
            $table->foreign('beasiswa_id')->references('id')->on('beasiswa')->nullable();
            $table->foreignId('users_id');
            $table->foreign('users_id')->references('id')->on('users')->nullable();
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
        Schema::dropIfExists('menus');
    }
}
