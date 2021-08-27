<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->unique();
            // $table->string('slug');
            $table->string('nama');
            $table->string('no_tlp');
            $table->string('tmpt_lahir');
            $table->string('tgl_lahir');
            $table->string('jkel');
            $table->integer('umur');
            $table->string('agama');
            $table->string('alamat');
            $table->string('tmpt_latihan');
            $table->string('sabuk');
            $table->string('rw_penyakit');
            $table->integer('beratbadan');
            $table->string('sertifikat')->nullable();
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
        Schema::dropIfExists('registrations');
    }
}
