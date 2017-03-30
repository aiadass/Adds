<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('secret'),
            ],
            [
                'name' => 'Registered',
                'email' => 'user@user.com',
                'password' => bcrypt('secret'),
            ]
        ];

        foreach ($users as $user) {
            \Illuminate\Support\Facades\DB::table('users')->insert($user);
        }
    }
}
