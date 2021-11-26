<?php

use Illuminate\Database\Seeder;
use App\Model\LawCategory;
use Carbon\Carbon;


class LawCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $current_date_time = Carbon::now()->toDateTimeString();

        $law_category = [];

        $insert_arr = array();

        foreach ($law_category as $key => $type) {
        	$insert_arr[] = [

        		'name' => $type,
        		'import_code' => importCode($type),
        		'status' => _active(),
        		'created_at' => $current_date_time,
        		'updated_at' => $current_date_time
        	];
        }

        LawCategory::insert($insert_arr);
    }
}
