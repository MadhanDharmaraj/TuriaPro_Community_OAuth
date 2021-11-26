<?php

use Illuminate\Database\Seeder;
use App\Model\Configuration;
use Carbon\Carbon;

class ConfigurationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$current_date = Carbon::now()->toDateTimeString();

		Configuration::insert([
			'site_name' => 'Turia',
			'site_description' => 'Turia Books, a simple automated accounting solution.',
			'email' => 'admin@turia.in',
			'telephone' => '9999999999',
			'address_line1' => '',
			'address_line2' => '',
			'city' => 'Bangalore',
			'state_id' => '',
			'country_id' => '',
			'pincode' => '',
			'currency_id' => '',
			'facebook' => '',
			'twitter' => '',
			'linkedin' => '',    
			'created_at' => $current_date,
			'updated_at' => $current_date,
		]);
    }
}
