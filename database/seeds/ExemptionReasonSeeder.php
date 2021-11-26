<?php

use Illuminate\Database\Seeder;
use App\Model\ExemptionReason;
use Carbon\Carbon;

class ExemptionReasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    }

    public function run()
    {
        $current_date_time = Carbon::now()->toDateTimeString();

        $exemption_reasons = ['Export of Product or Services','Supplies to SEZ','Non Taxable Services','Non Taxable Goods'];

        $insert_arr = array();

        foreach ($exemption_reasons as $key => $type) {
        	$insert_arr[] = [

        		'name' => $type,
        		'import_code' => importCode($type),
        		'status' => _active(),
        		'created_at' => $current_date_time,
        		'updated_at' => $current_date_time
        	];
        }

        ExemptionReason::insert($insert_arr);
    }
}
