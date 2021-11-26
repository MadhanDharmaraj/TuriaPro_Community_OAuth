<?php

use Illuminate\Database\Seeder;
use App\Model\UnitType;
use Carbon\Carbon;

class UnitTypeSeeder extends Seeder
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
					'name' => 'Kilogram',
					'code' => 'Kg',
					'import_code' => 'kilogram',
					'status' => _active(),
					'created_at' => $current_date,
					'updated_at' => $current_date,
				],
				[
					'name' => 'Length',
					'code' => 'Meter',
					'import_code' => 'length',
					'status' => _active(),
					'created_at' => $current_date,
					'updated_at' => $current_date,
				],
				[
					'name' => 'Hour',
					'code' => 'Hour',
					'import_code' => 'hour',
					'status' => _active(),
					'created_at' => $current_date,
					'updated_at' => $current_date,
				],
				[
					'name' => 'Quantitity',
					'code' => 'Qty',
					'import_code' => 'quantity',
					'status' => _active(),
					'created_at' => $current_date,
					'updated_at' => $current_date,
				],
				[
					'name' => 'Litre',
					'code' => 'Ltr',
					'import_code' => 'litre',
					'status' => _active(),
					'created_at' => $current_date,
					'updated_at' => $current_date,
				],
    	];

        UnitType::insert($insert_arr);
    }
}
