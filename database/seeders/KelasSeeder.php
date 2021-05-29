<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelas')->insert([
            'nama' => ' XI RPL 1'
        ]);
    }
}
