<?php

use Illuminate\Database\Seeder;
use App\Model\Designation;
use Carbon\Carbon;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $insert_arr = array();
        $current_date = Carbon::now()->toDateTimeString();

	        $insert_arr = [
				[
					'name' => 'Developer',					
					'import_code' => 'developer',
					'status' => _active(),
					'created_at' => $current_date,
					'updated_at' => $current_date,
				],
				[
					'name' => 'Accountant',					
					'import_code' => 'accountant',
					'status' => _active(),
					'created_at' => $current_date,
					'updated_at' => $current_date,
				],
				[
					'name' => 'Executive',
					'import_code' => 'executive',
					'status' => _active(),
					'created_at' => $current_date,
					'updated_at' => $current_date,
				],
				[
					'name' => 'Attender',					
					'import_code' => 'attender',
					'status' => _active(),
					'created_at' => $current_date,
					'updated_at' => $current_date,
				],
				[
					'name' => 'Tellecaller',					
					'import_code' => 'tellecaller',
					'status' => _active(),
					'created_at' => $current_date,
					'updated_at' => $current_date,
				],
    	];

        Designation::insert($insert_arr);
    }
}
