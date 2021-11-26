<?php

use Illuminate\Database\Seeder;
use App\Model\Authorization\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([
                    'name' => 'Super Admin',
                    'status' => 1,
                    'description' => 'Supreme Admin for Whole App',
                    'slug' => 'supreme-admin',      
                    'is_default' => 1,
                    'is_admin_role' => true,                      
                    ]);

        Role::insert([
                    'name' => 'Client Admin',
                    'status' => 1,
                    'description' => 'Client Admin for Selected Module App',
                    'slug' => 'client-admin',                            
                    'is_default' => 1,
                    'is_admin_role' => true,                      
                    ]);
    }
}
