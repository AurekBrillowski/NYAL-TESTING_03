<?php

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
        // $this->call(UsersTableSeeder::class);
        // $this->call(BoysTableSeeder::class);
        // $this->call(NYALCONFERENCESTableSeeder::class);
        $this->call(EventOrganizationsTableSeeder::class);
    }
}
