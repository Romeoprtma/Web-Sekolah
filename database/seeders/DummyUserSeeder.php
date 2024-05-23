<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'username'=>'admin',
                'role'=>'admin',
                'password'=>bcrypt('admin12345')
            ],
            
            [
                'username'=>'guru',
                'role'=>'guru',
                'password'=>bcrypt('12345')
            ],

            [
                'username'=>'siswa',
                'role'=>'siswa',
                'password'=>bcrypt('12345')
            ],

        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
