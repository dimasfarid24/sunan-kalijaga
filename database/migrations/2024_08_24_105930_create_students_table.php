<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('students', function (Blueprint $table) {
            $table->id();
            //$table->bigInteger('id_user')->unique();;
            $table->foreignId('id_user')->constrained('users')->onDelete('cascade');
            //$table->bigInteger('id_kelas')->unique();
            //$table->foreign('id_kelas')->references('id')->on('classes');
            $table->integer('nis')->unique();;
            $table->string('nama');
            $table->string('foto')->nullable();
            $table->integer('angkatan');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('telp');
            $table->string('alamat');
            $table->string('email');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
