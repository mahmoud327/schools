<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\School;
class CreateSchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        School::create([
            'name' => 'manara',
            'status' => '1',
        
        ]);
    }
}
