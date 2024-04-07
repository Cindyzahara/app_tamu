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
        Schema::create('tamu', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->enum('jk', ['perempuan', 'laki-laki']);
            $table->string('ttl');
            $table->enum('jabatan', ['pp', 'cgp', 'fasilitator', 'bbgp', 'disdik', 'pengunjung']);
            $table->integer('angkatan');
            $table->text('alamat');
            $table->string('no_tlp', 15);
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
        Schema::dropIfExists('tamu');
    }
};
