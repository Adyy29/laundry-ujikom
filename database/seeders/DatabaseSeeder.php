<?php

namespace Database\Seeders;

use App\Models\Outlet;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Outlet::create([
            'nama' => 'Insan Rahayu',
            'telp' => '089681238317',
            'jalan' => 'kebenaran',
            'RT' => '01',
            'RW' => '04',
            'kecamatan' => 'Ciperecet',
            'kabupaten' => 'Shiganshina',
            'provinsi' => 'Los angeles',
            'negara' => 'Wakanda',
            'kode_pos' => '40394'
        ]);

        Outlet::create([
            'nama' => 'Insan Permata',
            'telp' => '089681238317',
            'jalan' => 'kebenaran',
            'RT' => '01',
            'RW' => '04',
            'kecamatan' => 'Ciperecet',
            'kabupaten' => 'Shiganshina',
            'provinsi' => 'Los angeles',
            'negara' => 'Wakanda',
            'kode_pos' => '40394'
        ]);

    }
}
