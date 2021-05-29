<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->insert([
            'nama' => 'Sheva',
            'gender' => 'L',
            'alamat' => 'depok',
            'no_telp' => '0000000',
            'id_kelas' => '1'
        ]);
    }
}
