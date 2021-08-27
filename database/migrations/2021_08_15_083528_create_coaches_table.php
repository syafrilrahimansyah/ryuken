<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coaches', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            // $table->string('slug');
            $table->integer('umur');
            $table->string('tmpt_lahir');
            $table->string('tgl_lahir');
            $table->string('jkel');
            $table->string('agama');
            $table->string('alamat');
            $table->string('no_tlp');
            $table->string('sabuk');
            $table->string('aboutme')->nullable();
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
        Schema::dropIfExists('coaches');
    }
}
