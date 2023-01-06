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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('nik')->unique();
            $table->char('nama', 100);
            $table->string('nama_pengguna')->unique();
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->enum('agama', ['islam', 'kristen', 'katolik', 'budha', 'hindu']);
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->string('alamat');
            $table->string('sandi');
            $table->enum('pendidikan_akhir', ['tidak bersekolah', 'sd', 'smp', 'sma', 's1', 's2', 's3']);
            $table->string('email')->unique();
            $table->string('nomor_telepon');
            $table->string('pekerjaan');
            $table->string('ektp');
            $table->string('kk');
            $table->string('foto');
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
        Schema::dropIfExists('users');
    }
};
