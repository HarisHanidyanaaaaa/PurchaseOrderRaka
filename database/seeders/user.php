<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class user extends Seeder
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
                'name' => 'Raka',
                'email' => 'raka@gmail.com',
                'password' => 'raka',
                'role' => 'Admin'
            ]
        ];
    }
}
