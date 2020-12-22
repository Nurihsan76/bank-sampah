<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin'),
                'telpon' => '0812345678910',
                'alamat' => 'Kantor',
                'foto' => 'https://littlesmilespa.org/wp-content/uploads/2016/08/person-placeholder.png',
                'role' => 5
            ],
            [
                'name' => 'pengurus11',
                'email' => 'pengurus11@gmail.com',
                'password' => Hash::make('pengurus1'),
                'telpon' => '0812345678911',
                'alamat' => 'Bantul',
                'foto' => 'https://iili.io/K0gpF2.jpg',
                'role' => 1
            ],
            [
                'name' => 'pengurus12',
                'email' => 'pengurus12@gmail.com',
                'password' => Hash::make('pengurus1'),
                'telpon' => '0812345678912',
                'alamat' => 'Sleman',
                'foto' => 'https://iili.io/K0gpF2.jpg',
                'role' => 1
            ],
            [
                'name' => 'pengurus21',
                'email' => 'pengurus21@gmail.com',
                'password' => Hash::make('pengurus2'),
                'telpon' => '0812345678913',
                'alamat' => 'Bantul',
                'foto' => 'https://iili.io/K0gpF2.jpg',
                'role' => 2
            ],
            [
                'name' => 'pengurus22',
                'email' => 'pengurus22@gmail.com',
                'password' => Hash::make('pengurus2'),
                'telpon' => '0812345678914',
                'alamat' => 'Sleman',
                'foto' => 'https://iili.io/K0gpF2.jpg',
                'role' => 2
            ],
            [
                'name' => 'bendahara',
                'email' => 'bendahara@gmail.com',
                'password' => Hash::make('bendahara'),
                'telpon' => '0812345678915',
                'alamat' => 'Kantor',
                'foto' => 'https://iili.io/K0gpF2.jpg',
                'role' => 4
            ]
        ];
        
        DB::table('users')->insert($users);
    }
}