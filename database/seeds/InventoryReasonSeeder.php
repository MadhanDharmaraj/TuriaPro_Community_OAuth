<?php

use Illuminate\Database\Seeder;
use App\Model\InventoryReason;
use Carbon\Carbon;

class InventoryReasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $current_date_time = Carbon::now()->toDateTimeString();

        $inventory_reasons = ['Stolen','Damaged','Wastage','Revaluation','Stock Write Off'];

        $insert_arr = array();

        foreach ($inventory_reasons as $key => $type) {
        	$insert_arr[] = [

        		'name' => $type,
        		'import_code' => importCode($type),
        		'status' => _active(),
        		'created_at' => $current_date_time,
        		'updated_at' => $current_date_time
        	];
        }

        InventoryReason::insert($insert_arr);
    }
}
