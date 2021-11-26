<?php

use Illuminate\Database\Seeder;
use App\Model\Country;
use App\Model\State;
use Carbon\Carbon;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$insert_arr = array();
    	$date = Carbon::now()->toDateTimeString();
    	$countries = Country::get();
    	$active_status = _active();
    	$inactive_status = _inactive();

    	$state_arr = [
	 		[				
				'name' => "Andaman and Nicobar Islands",				
				'short_name' => 'AN',				
				'country_code' => 'IN',
				'country_id' => '',
				'status' => $active_status,
			], 
	 		[				
				'name' => "Andhra Pradesh",				
				'short_name' => 'AP',				
				'country_code' => 'IN',
				'country_id' => '',
				'status' => $active_status,
			], 
	 		[				
				'name' => "Arunachal Pradesh",				
				'short_name' => 'AR',				
				'country_code' => 'IN',
				'country_id' => '',
				'status' => $active_status,
			], 
	 		[				
				'name' => "Assam",				
				'short_name' => 'AS',				
				'country_code' => 'IN',
				'country_id' => '',
				'status' => $active_status,
			], 
	 		[				
				'name' => "Bihar",				
				'short_name' => 'BR',				
				'country_code' => 'IN',
				'country_id' => '',
				'status' => $active_status,
			], 
	 		[				
				'name' => "Chandigarh",				
				'short_name' => 'CH',				
				'country_code' => 'IN',
				'country_id' => '',
				'status' => $active_status,
			], 
	 		[				
				'name' => "Chhattisgarh",				
				'short_name' => 'CT',				
				'country_code' => 'IN',
				'country_id' => '',
				'status' => $active_status,
			], 
	 		[				
				'name' => "Dadra and Nagar Haveli",				
				'short_name' => 'DN',				
				'country_code' => 'IN',
				'country_id' => '',
				'status' => $active_status,
			], 
	 		[				
				'name' => "Daman and Diu",				
				'short_name' => 'DD',				
				'country_code' => 'IN',
				'country_id' => '',
				'status' => $active_status,
			], 
	 		[				
				'name' => "Delhi",				
				'short_name' => 'DL',				
				'country_code' => 'IN',
				'country_id' => '',
				'status' => $active_status,
			], 
	 		[				
				'name' => "Goa",				
				'short_name' => 'GA',				
				'country_code' => 'IN',
				'country_id' => '',
				'status' => $active_status,
			], 
	 		[				
				'name' => "Gujarat",				
				'short_name' => 'GJ',				
				'country_code' => 'IN',
				'country_id' => '',
				'status' => $active_status,
			], 
	 		[				
				'name' => "Haryana",				
				'short_name' => 'HR',				
				'country_code' => 'IN',
				'country_id' => '',
				'status' => $active_status,
			], 
	 		[				
				'name' => "Himachal Pradesh",				
				'short_name' => 'HP',				
				'country_code' => 'IN',
				'country_id' => '',
				'status' => $active_status,
			], 
	 		[				
				'name' => "Jammu and Kashmir",				
				'short_name' => 'JK',				
				'country_code' => 'IN',
				'country_id' => '',
				'status' => $active_status,
			], 
	 		[				
				'name' => "Jharkhand",				
				'short_name' => 'JH',				
				'country_code' => 'IN',
				'country_id' => '',
				'status' => $active_status,
			], 
	 		[				
				'name' => "Karnataka",				
				'short_name' => 'KA',				
				'country_code' => 'IN',
				'country_id' => '',
				'status' => $active_status,
			], 
	 		[				
				'name' => "Kerala",				
				'short_name' => 'KL',				
				'country_code' => 'IN',
				'country_id' => '',
				'status' => $active_status,
			], 
	 		[				
				'name' => "Lakshadweep",				
				'short_name' => 'LD',				
				'country_code' => 'IN',
				'country_id' => '',
				'status' => $active_status,
			], 
	 		[				
				'name' => "Madhya Pradesh",				
				'short_name' => 'MP',				
				'country_code' => 'IN',
				'country_id' => '',
				'status' => $active_status,
			], 
	 		[				
				'name' => "Maharashtra",				
				'short_name' => 'MH',				
				'country_code' => 'IN',
				'country_id' => '',
				'status' => $active_status,
			], 
	 		[				
				'name' => "Manipur",				
				'short_name' => 'MN',				
				'country_code' => 'IN',
				'country_id' => '',
				'status' => $active_status,
			], 
	 		[				
				'name' => "Meghalaya",				
				'short_name' => 'ML',				
				'country_code' => 'IN',
				'country_id' => '',
				'status' => $active_status,
			], 
	 		[				
				'name' => "Mizoram",				
				'short_name' => 'MZ',				
				'country_code' => 'IN',
				'country_id' => '',
				'status' => $active_status,
			], 
	 		[				
				'name' => "Nagaland",				
				'short_name' => 'NL',				
				'country_code' => 'IN',
				'country_id' => '',
				'status' => $active_status,
			], 
	 		[				
				'name' => "Odisha",				
				'short_name' => 'OR',				
				'country_code' => 'IN',
				'country_id' => '',
				'status' => $active_status,
			], 
	 		[				
				'name' => "Puducherry",				
				'short_name' => 'PY',				
				'country_code' => 'IN',
				'country_id' => '',
				'status' => $active_status,
			], 
	 		[				
				'name' => "Punjab",				
				'short_name' => 'PB',				
				'country_code' => 'IN',
				'country_id' => '',
				'status' => $active_status,
			], 
	 		[				
				'name' => "Rajasthan",				
				'short_name' => 'RJ',				
				'country_code' => 'IN',
				'country_id' => '',
				'status' => $active_status,
			], 
	 		[				
				'name' => "Sikkim",				
				'short_name' => 'SK',				
				'country_code' => 'IN',
				'country_id' => '',
				'status' => $active_status,
			], 
	 		[				
				'name' => "Tamil Nadu",				
				'short_name' => 'TN',				
				'country_code' => 'IN',
				'country_id' => '',
				'status' => $active_status,
			], 
	 		[				
				'name' => "Telangana",				
				'short_name' => 'TG',				
				'country_code' => 'IN',
				'country_id' => '',
				'status' => $active_status,
			], 
	 		[				
				'name' => "Tripura",				
				'short_name' => 'TR',				
				'country_code' => 'IN',
				'country_id' => '',
				'status' => $active_status,
			], 
	 		[				
				'name' => "Uttar Pradesh",				
				'short_name' => 'UP',				
				'country_code' => 'IN',
				'country_id' => '',
				'status' => $active_status,
			], 
	 		[				
				'name' => "Uttarakhand",				
				'short_name' => 'UT',				
				'country_code' => 'IN',
				'country_id' => '',
				'status' => $active_status,
			], 
	 		[				
				'name' => "West Bengal",				
				'short_name' => 'WB',				
				'country_code' => 'IN',
				'country_id' => '',
				'status' => $active_status,
			], 

			/*Add array same like*/
		];

		foreach ($state_arr as $key => $value) {

			$country_id = $countries->where('short_name',$value['country_code'])->first()->id ?? '';

			$value['country_id'] = $country_id;

			State::insert($value);
		}
    }
}
