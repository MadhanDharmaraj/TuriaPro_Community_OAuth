<?php

use Illuminate\Database\Seeder;
use App\Model\BusinessType;
use Carbon\Carbon;

class BusinessTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	

    	$current_date_time = Carbon::now()->toDateTimeString();

    	$businessTypeArray = [
				'Agriculture',
				'AI ',
				'Airport Operations',
				'Analytics',
				'Animation ',
				'Architecure Interior Design',
				'Art & Photography',
				'Automotive',
				'Biotechnology',
				'Chemicals',
				'Computer Vision',
				'Constrution',
				'Consulting ',
				'Dating and Matrimonial',
				'Design',
				'Education',
				'Energy',
				'Engineering Services',
				'Enterprise Software (ERP)',
				'Events ',
				'Fashion',
				'Finance Technolog (Fintech)',
				'Food & Beverages',
				'Green Technology',
				'Healthcare and Lifescience',
				'Household Servies',
				'Human Resources',
				'Hyperlocal',
				'Internet of Things (IOT)',
				'Last time delivery',
				'Logistics',
				'Marketing ',
				'Media & Entertainment',
				'Nanotechnology',
				'Non - Renewable Energy',
				'Others',
				'Passangers Services',
				'Pets & Animals',
				'Professionals ',
				'Real Estate',
				'Renewable Energy',
				'Retail',
				'Robotics',
				'safety',
				'security Services',
				'Service Providers',
				'Social Impact',
				'Social Network',
				'Sports',
				'Technology Hardware',
				'Technology Software',
				'Telecomuination & Networking',
				'Textile & Apparels',
				'Transporation & Storage',
				'Travel and Tourism ',
				'Virtual Reality',
				'Waste Management',
    	];

    	$insert_arr = array();
        
        foreach ($businessTypeArray as $key => $value) {
        	$insert_arr[] = [        
	            'name' => $value,
	            'status' => _active(),
	            'created_at' => $current_date_time,
	            'updated_at' => $current_date_time,
	        ];
        }        
        
        BusinessType::insert($insert_arr);
    }
}
