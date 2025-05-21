<?php

namespace Database\Seeders;

use App\Models\Addon;
use App\Models\Business;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
                'name' => 'Aldi',
                'email' => 'aldi@gmail.com',
                'role' => 'presiden',
                'password' => bcrypt('password'),
            ],
        ];

        foreach ($users as $user) {
            $user = User::create($user);
            $user->assignRole('presiden');
        }

        Subscription::create([
            'name' => 'Gratis 5 hari',
            'price' => 0,
        ]);

        Subscription::create([
            'name' => 'Bulanan',
            'price' => 20000,
        ]);

        Subscription::create([
            'name' => 'Tahunan',
            'price' => 280000,
        ]);

        Addon::create([
            'name' => 'Multi Kasir', 
            'price' => 4000,
            'description' => 'Membuat lebih dari satu kasir'
        ]);
    }   
}
