<?php

use Illuminate\Database\Seeder;
use App\Model\GstRegistrationType;
use Carbon\Carbon;

class GstRegistrationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$current_date_time = Carbon::now()->toDateTimeString();

        // $gst_registration_types = ['Registered Business','Unregistered Business'];

        $insert_arr = array();

        // foreach ($gst_registration_types as $key => $type) {
        // 	$insert_arr[] = [

        // 		'name' => $type,
        // 		'import_code' => importCode($type),
        // 		'status' => _active(),
        // 		'created_at' => $current_date_time,
        // 		'updated_at' => $current_date_time
        // 	];
        // }

        $insert_arr = [
            [
                'name' => 'GST Registered - Regular',
                'import_code' => importCode('GST Registered Business - Composite'),
                'is_gstin_required' => _active(),
                'status' => _active(),
                'created_at' => $current_date_time,
                'updated_at' => $current_date_time
            ],
            [
                'name' => 'GST Registered - Composite',
                'import_code' => importCode('GST Registered Business - Regular'),
                'is_gstin_required' => _active(),
                'status' => _active(),
                'created_at' => $current_date_time,
                'updated_at' => $current_date_time
            ],
            [
                'name' => 'GST Unregistered',
                'import_code' => importCode('GST Unregistered Business'),
                'is_gstin_required' => _active(),
                'status' => _active(),
                'created_at' => $current_date_time,
                'updated_at' => $current_date_time
            ],
            [
                'name' => 'SEZ Customer',
                'import_code' => importCode('SEZ Customer'),
                'is_gstin_required' => _active(),
                'status' => _active(),
                'created_at' => $current_date_time,
                'updated_at' => $current_date_time
            ],
            [
                'name' => 'Overseas',
                'import_code' => importCode('Overseas'),
                'is_gstin_required' => _active(),
                'status' => _active(),
                'created_at' => $current_date_time,
                'updated_at' => $current_date_time
            ],


        ];

        GstRegistrationType::insert($insert_arr);
    }
}
