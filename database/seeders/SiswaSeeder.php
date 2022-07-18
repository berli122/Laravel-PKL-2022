<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sample = [
            [
                'nama' => 'Abdul', 'nis' => '2022202301', 'jk' => 'L',
                'tgl_lahir' => '1998-08-15', 'alamat' => 'Bandung',

            ],
            [
                'nama' => 'Adul', 'nis' => '2022202302', 'jk' => 'L',
                'tgl_lahir' => '1998-08-16', 'alamat' => 'JAKSEL',
            ],

        ];
        DB::table('siswas')->insert($sample);

    }
}
