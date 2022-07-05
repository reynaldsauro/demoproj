<?php

namespace Database\Seeders;
use Illuminate\Support\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;

use Illuminate\Database\Seeder;

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
                'name' => 'Ryan Patayon',
                'email' => 'ryanpats@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('patayon12342')
            ],
            [
                'name' => 'Agnes Patayon',
                'email' => 'agnesgwapa@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('agneshahaha123')
            ],
            [
                'name' => 'Reynald Sauro',
                'email' => 'humagkaonlibang@gmail.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('hahaxd123@')
            ],

        ];
        foreach($users as $user){
            User::create($user);

        }
    }
}
