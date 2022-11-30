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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('photo')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('universitas');
            $table->string('fakultas');
            $table->string('jurusan');
            $table->string('whatsapp')->nullable();
            $table->string('instagram')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        
        DB::table('users')->insert(
            array(
                ['name' => 'Muhammad Shafwan Abdullah',
                'email' => 'shafwan@gmail.com',
                'universitas' => 'Universitas Siliwangi',
                'fakultas' => 'teknik',
                'jurusan' => 'informatika',
                'whatsapp' => '081311073610',
                'password' => bcrypt('12345678')],
                
                ['name' => 'Zulfan Syahidan Alfarra',
                'email' => 'zulfan@gmail.com',
                'universitas' => 'Universitas Siliwangi',
                'fakultas' => 'teknik',
                'jurusan' => 'informatika',
                'whatsapp' => '081311073610',
                'password' => bcrypt('12345678')],
                
                ['name' => 'ADMIN',
                'email' => 'admin@gmail.com',
                'universitas' => 'ADMIN',
                'fakultas' => 'ADMIN',
                'jurusan' => 'ADMIN',
                'whatsapp' => '0000000000000',
                'password' => bcrypt('12345678')]
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
        Schema::dropIfExists('users');
    }
};
