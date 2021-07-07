<?php

namespace Database\Seeders;

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
        \DB::table('users')->insert([
            'email' => 'admin@rrdicd.com',
            'password' => bcrypt('dostregion9'),
            'type' => 'Administrator',
            'status' => 'Active',
            'created_at' => now(),
            'updated_at' => now(),
            'email_verified_at' => now(),
        ]);

        \DB::table('user_profiles')->insert([
            'firstname' => 'Ra-ouf',
            'lastname' => 'Jumli',
            'middlename' => 'Indanan',
            'avatar' => 'avatar.jpg',
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        \DB::table('dropdowns')->insert([
            'id' => 1,
            'name' => 'n/a',
            'type' => 'n/a',
            'classification' => 'n/a',
            'color' => 'n/a',
        ]);

        $this->call(DropdownsTableSeeder::class);
        $this->call(InstitutionsTableSeeder::class);
    }
}
