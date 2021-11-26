<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use Carbon\Carbon;
use App\Model\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$current_date = Carbon::now()->toDateTimeString();

    	$user = new User();

        $super_admin_user = [
        	'name' => 'SuperAdmin',
            'email' => 'superadmin@turia.in',
            'password' => Hash::make('Welcome@123'),
            'user_type_id' => adminUserTypeId(),
            'is_super_admin_user' => true,
            'status' => _approved(),
            "updated_at" => $current_date,
			"created_at" => $current_date
        ];

        $user->fill($super_admin_user)->save();        
    }
}
