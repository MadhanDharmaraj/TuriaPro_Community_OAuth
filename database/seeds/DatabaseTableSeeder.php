<?php

use Illuminate\Database\Seeder;
use App\Model\Database;

class DatabaseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        Database::insert([
        		'host' => '165.22.211.249',
        		'port' => '19481',
        		'name' => 'turia_saas_live',
        		'username' => '',
        		'password' => '',
                'db_slug' => 'trial001',
        		'status' => true,
        	]);
    }
}
