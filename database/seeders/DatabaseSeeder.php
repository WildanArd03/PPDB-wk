<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 500) as $index) {
            DB::table('daftar_pesertas')->insert([
                'nis' => $faker->nis,
                'nama' => $faker->nama,
                'jenis_kelamin' => $faker->jenis_kelamin,
                'tempat_lahir' => $faker->tempat_lahir,
                'tanggal_lahir' => $faker->tanggal_lahir,
                'alamat' => $faker->alamar,
                'asal_sekolah' => $faker->asal_sekolah,
                'kelas' => $faker->kelas,
                'jurusan' => $faker->jurusan,
            ]);
        }
    }
}
