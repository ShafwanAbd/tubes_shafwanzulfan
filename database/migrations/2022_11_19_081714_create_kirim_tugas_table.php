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
        Schema::create('kirim_tugas', function (Blueprint $table) {
            $table->id();

            $table->string('idTugas');
            $table->string('email');
            $table->string('name');
            $table->string('judul');
            $table->string('pesan')->nullable();
            $table->string('linkTugas');
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
        Schema::dropIfExists('kirim_tugas');
    }
};
