<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pelamar1= User::create([
            'name' => 'Wahyu',
            'role' => 'pelamar',
            'email' => 'wahyu404@gmail.com',
            'password' => bcrypt('wahyu1234')
        ]);
        $pelamar1->assignRole('pelamar');

        $perusahaan1 = User::create([
            'name' => 'CAMP404',
            'role' => 'perusahaan',
            'email' => 'camp404@gmail.com',
            'password' => bcrypt('camp1234')
        ]);

        $perusahaan1->assignRole('perusahaan');

        $admin1 = User::create([
            'name' => 'Admin CAWAN',
            'role' => 'admin',
            'email' => 'admin404@gmail.com',
            'password' => bcrypt('admin1234')
        ]);

        $admin1->assignRole('admin');
    }
}
