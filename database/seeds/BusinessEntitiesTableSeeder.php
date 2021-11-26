<?php

use Illuminate\Database\Seeder;
use App\Model\BusinessEntity;
use Carbon\Carbon;

class BusinessEntitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$insert_arr = array();
        
        $current_date_time = Carbon::now()->toDateTimeString();

        $insert_arr = [
        [
            'name' => 'Private Limited Company',
            'status' => 1,
            'created_at' => $current_date_time,
            'updated_at' => $current_date_time,
        ],[
            'name' => 'Public Limited Company',
            'status' => 1,
            'created_at' => $current_date_time,
            'updated_at' => $current_date_time,
        ],[
            'name' => 'Unlimited Company',
            'status' => 1,
            'created_at' => $current_date_time,
            'updated_at' => $current_date_time,
        ],[
            'name' => 'Limited Liability Partnership (LLP)',
            'status' => 1,
            'created_at' => $current_date_time,
            'updated_at' => $current_date_time,
        ],[
            'name' => 'Partnership',
            'status' => 1,
            'created_at' => $current_date_time,
            'updated_at' => $current_date_time,
        ],[
            'name' => 'Sole Proprietorship',
            'status' => 1,
            'created_at' => $current_date_time,
            'updated_at' => $current_date_time,
        ],[
            'name' => 'Liaison Office / Representative Office',
            'status' => 1,
            'created_at' => $current_date_time,
            'updated_at' => $current_date_time,
        ],[
            'name' => 'Project Office',
            'status' => 1,
            'created_at' => $current_date_time,
            'updated_at' => $current_date_time,
        ],[
            'name' => 'Branch Office',
            'status' => 1,
            'created_at' => $current_date_time,
            'updated_at' => $current_date_time,
        ],[
            'name' => 'Joint Venture Company',
            'status' => 1,
            'created_at' => $current_date_time,
            'updated_at' => $current_date_time,
        ],[
            'name' => 'Subsidiary Company',
            'status' => 1,
            'created_at' => $current_date_time,
            'updated_at' => $current_date_time,
        ],
           
   ];

        
        BusinessEntity::insert($insert_arr);
    }
}