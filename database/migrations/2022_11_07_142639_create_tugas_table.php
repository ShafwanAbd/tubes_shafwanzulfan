<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('tugas', function (Blueprint $table) {
            $table->id();

            $table->string('fakultas');
            $table->string('jurusan');
            $table->string('kategori');
            $table->string('deskripsi');
            $table->string('deadline');
            $table->integer('harga');
            $table->timestamps();
        });

        DB::table('tugas')->insert(
            array(
                ['fakultas' => 'Keguruan dan Ilmu Pendidikan',
                'jurusan' => 'Pendidikan Masyarakat',
                'kategori' => 'PPT',
                'deskripsi' => 'Membuat sebuah PPT tentang pentingnya rasa sosialisasi dalam masyarakat.',
                'deadline' => '23 Januari 2023',
                'harga' => '50000'], 
                
                ['fakultas' => 'Keguruan dan Ilmu Pendidikan',
                'jurusan' => 'Pendidikan Bahasa Indonesia',
                'kategori' => 'PPT',
                'deskripsi' => 'Membuat sebuah PPT tentang pentingnya bahasa indonesia di dalam negeri.',
                'deadline' => '19 Desember 2023',
                'harga' => '60000'], 
                
                ['fakultas' => 'Keguruan dan Ilmu Pendidikan',
                'jurusan' => 'Pendidikan Bahasa Inggris',
                'kategori' => 'PPT',
                'deskripsi' => 'Membuat sebuah PPT tentang pentingnya bahasa inggris sebagai bahasa internasional.',
                'deadline' => '01 Januari 2023',
                'harga' => '55000'], 
                
                ['fakultas' => 'Keguruan dan Ilmu Pendidikan',
                'jurusan' => 'Pendidikan Matematika',
                'kategori' => 'Jurnal',
                'deskripsi' => 'Membuat sebuah jurnal tentang menyelesaikan permasalahan dengan matematika.',
                'deadline' => '10 Februari 2023',
                'harga' => '75000'], 
                
                ['fakultas' => 'Keguruan dan Ilmu Pendidikan',
                'jurusan' => 'Pendidikan Biologi',
                'kategori' => 'PPT',
                'deskripsi' => 'Membuat sebuah PPT tentang pentingnya sperma sehat bagi pasutri.',
                'deadline' => '11 Februari 2023',
                'harga' => '65000'], 
                
                ['fakultas' => 'Ilmu Kesehatan',
                'jurusan' => 'Kesehatan Masyarakat',
                'kategori' => 'Jurnal',
                'deskripsi' => 'Membuat sebuah jurnal tentang pentingnya lingkungan yang sehat.',
                'deadline' => '18 Desember 2023',
                'harga' => '75000'], 
                
                ['fakultas' => 'Teknik',
                'jurusan' => 'Informatika',
                'kategori' => 'Web Development',
                'deskripsi' => 'Membuat sebuah website yang mempermudah barang import/export.',
                'deadline' => '23 April 2023',
                'harga' => '250000'], 
                
                ['fakultas' => 'Teknik',
                'jurusan' => 'Informatika',
                'kategori' => 'Android Development',
                'deskripsi' => 'Membuat sebuah aplikasi Android yang bisa memudahkan masyarakat mendapatkan bantuan sosial.',
                'deadline' => '25 Juli 2023',
                'harga' => '600000'], 

                ['fakultas' => 'Teknik',
                'jurusan' => 'Teknik Elektro',
                'kategori' => 'Jurnal',
                'deskripsi' => 'Membuat sebuah jurnal yang bertemakan "Penyelesaian Masalah pada Saklar dengan Algoritma E-9842".',
                'deadline' => '13 Januari 2023',
                'harga' => '75000'], 
                
                ['fakultas' => 'Teknik',
                'jurusan' => 'Teknik Sipil',
                'kategori' => 'Jurnal',
                'deskripsi' => 'Membuat sebuah jurnal tentang pentingnya arsitektur pada bangunan tinggi.',
                'deadline' => '09 Desember 2023',
                'harga' => '95000'], 
                
                ['fakultas' => 'Ilmu Kesehatan',
                'jurusan' => 'Gizi',
                'kategori' => 'Jurnal',
                'deskripsi' => 'Membuat sebuah jurnal tentang pentingnya gizi bagi bayi.',
                'deadline' => '23 Desember 2022',
                'harga' => '55000'], 
                
                ['fakultas' => 'Ilmu Kesehatan',
                'jurusan' => 'Gizi',
                'kategori' => 'Jurnal',
                'deskripsi' => 'Membuat sebuah jurnal tentang pentingnya gizi bagi bayi.',
                'deadline' => '23 Desember 2022',
                'harga' => '55000'], 
                
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tugas');
    }
};
