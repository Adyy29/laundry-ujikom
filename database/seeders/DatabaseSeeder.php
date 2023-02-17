<?php

namespace Database\Seeders;

use App\Models\User;
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

        User::create([
            'outlet_id' => '1',
            'level' => 'admin',
            'password' => bcrypt('admin123'),
            'nama' => 'admin',
            'username' => 'admin'
        ]);

        User::create([
            'outlet_id' => '1',
            'level' => 'kasir',
            'password' => bcrypt('kasir123'),
            'nama' => 'kasir',
            'username' => 'kasir'
        ]);

        User::create([
            'outlet_id' => '1',
            'level' => 'owner',
            'password' => bcrypt('owner123'),
            'nama' => 'owner',
            'username' => 'owner'
        ]);

    }
}
