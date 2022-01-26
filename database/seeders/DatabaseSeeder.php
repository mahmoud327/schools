<?php

use Illuminate\Database\Seeder;
use  Database\Seeders\CreateStudentSeeder;
use  Database\Seeders\CreateSchoolSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CreateStudentSeeder::class);
        $this->call(CreateSchoolSeeder::class);
    }
}
