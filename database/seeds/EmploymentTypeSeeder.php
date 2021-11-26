<?php

use Illuminate\Database\Seeder;
use App\Model\EmploymentType;
use Carbon\Carbon;


class EmploymentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {
        $current_date_time = Carbon::now()->toDateTimeString();

        $employment_type = ['Probation','Internship','Part Time','Contract','Permanent'];

        $insert_arr = array();

        foreach ($employment_type as $key => $type) {
        	$insert_arr[] = [

        		'name' => $type,
        		'import_code' => importCode($type),
        		'status' => _active(),
        		'created_at' => $current_date_time,
        		'updated_at' => $current_date_time
        	];
        }

        EmploymentType::insert($insert_arr);
    }
}
