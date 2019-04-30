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
        factory(\App\Models\User::class, 1)
            ->create([
                'email' => 'user1@user.com',
                'company_id' => 1
            ]);

        factory(\App\Models\User::class, 1)
            ->create([
                'email' => 'user2@user.com',
                'company_id' => 2
            ]);
    }
}
