<?php

namespace Database\Seeders;

use App\Models\Addon;
use App\Models\Business;
use App\Models\Pendaftaran;
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
                'password' => bcrypt('password'),
                'is_active' => 1
            ],
        ];

        foreach ($users as $user) {
            $user = User::create($user);
            $user->assignRole('presiden');
        }

        Pendaftaran::factory()->count(20)->create();
    }
}
