<?php

// database/migrations/{timestamp}_create_pendaftaran_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaranTable extends Migration
{
    public function up()
    {
        // database/migrations/{timestamp}_create_pendaftaran_table.php
        Schema::create('pendaftaran', function (Blueprint $table) {
         $table->id();
         $table->string('nama');
         $table->string('nim');
         $table->string('jurusan');
         $table->string('email');
         $table->string('divisi');
         $table->text('motivasi')->nullable();
         $table->timestamps();
});

    }

    public function down()
    {
        Schema::dropIfExists('pendaftaran');
    }
}
