<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\School;

class CreateStudentSeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
public function run()
{
    
            $student = Student::create([
                'name'          => 'mahmoud',
                'school_id'     =>1,
                'order' =>5,
            
            ]);




    }
}
