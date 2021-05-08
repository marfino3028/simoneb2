<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
        'name' => 'Marfino Hamzah',
        'email' => 'marfinohamzah455@gmail.com',
        'password' => bcrypt('admin'),
        'nim' => '1234',
        'prodi' => 'Hukum Ekonomi Syariah',
        'angkatan' => '2020/2021',
        'alamat' => 'Arjuna 2',
        'hp' => '089626312680',
        'beasiswa' => '100%',
        'role' => 'mahasiswa'
        ]);
        DB::table('users')->insert([
            'name' => 'Valenia Tabhita Putri',
            'email' => 'valeniatp@gmail.com',
            'password' => bcrypt('admin'),
            'nim' => '12345',
            'prodi' => 'Perbankan Syariah',
            'angkatan' => '2021/2022',
            'alamat' => 'Kaliwingko',
            'hp' => '089626512680',
            'beasiswa' => '100%',
            'role' => 'mahasiswa'
            ]);
        DB::table('users')->insert([
        'name' => 'Yoyo Sundoyo',
        'email' => 'Arroisy.ys@gmail.com',
        'password' => bcrypt('admin'),
        'nim' => '12345',
        'prodi' => null,
        'angkatan' => '2021/2022',
        'alamat' => 'Kaliwingko',
        'hp' => '089626512680',
        'beasiswa' => null,
        'role' => 'admin'
        ]);
    }
}
