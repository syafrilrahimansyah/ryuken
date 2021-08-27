<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaisiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilaisiswas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('registration_id')->nullable();
            $table->foreignId('user_id');
            $table->string('nama');
            $table->string('kelas');
            $table->integer('kyorugi');
            $table->integer('poomsae');
            $table->integer('kyukpa');
            $table->string('naikke');
            $table->string('published_at')->nullable();
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
        Schema::dropIfExists('nilaisiswas');
    }
}
