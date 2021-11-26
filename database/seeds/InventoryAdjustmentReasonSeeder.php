<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Model\InventoryAdjustmentReason;

class InventoryAdjustmentReasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $current_date_time = Carbon::now()->toDateTimeString();

        $inventory_adjustment_reasons = ['Sample Goods','Stock on Fire','Stock Write Off','Wastage','Damaged Goods','Stolen Goods'];

        $insert_arr = array();

        foreach ($inventory_adjustment_reasons as $key => $type) {
        	$insert_arr[] = [

        		'name' => $type,
        		'import_code' => importCode($type),
        		'status' => _active(),
        		'created_at' => $current_date_time,
        		'updated_at' => $current_date_time
        	];
        }

        InventoryAdjustmentReason::insert($insert_arr);
    }
}
