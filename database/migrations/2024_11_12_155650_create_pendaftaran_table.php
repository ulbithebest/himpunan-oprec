<?php

// database/migrations/{timestamp}_create_pendaftaran_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaranTable extends Migration
{
    public function up()
    {
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Kolom Foreign Key
            $table->string('jurusan');
            $table->string('divisi');
            $table->text('motivasi');
            $table->string('foto_diri');
            $table->string('cv_sertif');
            $table->timestamps();

            // Menambahkan Foreign Key Constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pendaftaran');
    }
}
