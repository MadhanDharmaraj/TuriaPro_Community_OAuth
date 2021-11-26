<?php

use Illuminate\Database\Seeder;

use App\Model\PlanValidity;
use Carbon\Carbon;

class PlanValiditySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now()->toDateTimeString();
        $insert_arr = array();
        $insert_arr = [
            [
            'name' => '14 days',
            'validity' => 14,
            'is_beginner_validity' => 1,
            'created_at' => $date,
            'updated_at' => $date,
            ],
            [
            'name' => '1 Month',
            'validity' => 30,
            'is_beginner_validity' => 0,
            'created_at' => $date,
            'updated_at' => $date,
        ],[
            'name' => '3 Months',
            'validity' => 90,
            'is_beginner_validity' => 0,
            'created_at' => $date,
            'updated_at' => $date,
        ],[
            'name' => '6 Months',
            'validity' => 183,
            'is_beginner_validity' => 0,
            'created_at' => $date,
            'updated_at' => $date,
        ],[
            'name' => '1 Year',
            'validity' => 365,
            'is_beginner_validity' => 0,
            'created_at' => $date,
            'updated_at' => $date,
        ],
    ];

        PlanValidity::insert($insert_arr);
    }
}


