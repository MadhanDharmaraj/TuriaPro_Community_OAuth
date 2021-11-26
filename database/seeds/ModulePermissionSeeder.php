<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Model\Base\Module;
use App\Model\Base\Permission;

class ModulePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
    	/*Module List Only From Client Panel*/


        $modules = [['Group'=>'Master','name' => 'Tax','Transactions' => ['Read','Write','Delete']],
            ['Group'=>'Master','name' => 'TaxGroup','Transactions' => ['Read','Write','Delete']],
            ['Group'=>'Master','name' => 'Roles','Transactions' => ['Read','Write','Delete']],
            ['Group'=>'Master','name' => 'Employee','Transactions' => ['Read','Write','Delete','Special']],
            ['Group'=>'Master','name' => 'Invites','Transactions' => ['Read','Write','Delete','Special']],
            ['Group'=>'Master','name' => 'Unit Type','Transactions' => ['Read','Write','Delete']],
            ['Group'=>'Master','name' => 'Exemption Reason','Transactions' => ['Read','Write','Delete']],
            ['Group'=>'Master','name' => 'Designations','Transactions' => ['Read','Write','Delete']],
            ['Group'=>'Master','name' => 'Inventory Reason','Transactions' => ['Read','Write','Delete']],
            ['Group'=>'Master','name' => 'Opening Balance','Transactions' => ['Read','Write','Delete']],
            ['Group'=>'Contacts','name' => 'Contacts','Transactions' => ['Read','Write','Delete','Export','Special']],
            ['Group'=>'Product and Services','name' => 'Items','Transactions' => ['Read','Write','Delete','Export','Special']],
            ['Group'=>'Income','name' => 'Estimates','Transactions' => ['Read','Write','Delete','Export','Special']],
            ['Group'=>'Income','name' => 'Invoice','Transactions' => ['Read','Write','Delete','Export','Special']],   
            ['Group'=>'Income','name' => 'Recurring Invoice','Transactions' => ['Read','Write','Delete','Export','Special']],
            ['Group'=>'Income','name' => 'Recieved Payments','Transactions' => ['Read','Write','Delete','Export','Special']],         
            ['Group'=>'Expense','name' => 'Expenses','Transactions' => ['Read','Write','Delete','Export','Special']],
            ['Group'=>'Expense','name' => 'Bill Payments','Transactions' => ['Read','Write','Delete','Export','Special']],
            ['Group'=>'Banking','name' => 'Bank & Cash','Transactions' => ['Read','Write','Delete','Export','Special']],
            ['Group'=>'Accounting','name' => 'Journal','Transactions' => ['Read','Write','Delete','Export','Special']],
            ['Group'=>'Accounting','name' => 'Drive','Transactions' => ['Read','Write','Delete','Export','Special']],
            ['Group'=>'Accounting','name' => 'Charts Of Account','Transactions' => ['Read','Write','Delete','Export','Special']],
            ['Group'=>'Compliances','name' => 'Compliance','Transactions' => ['Read','Write','Delete','Export','Special']],
            ['Group'=>'News Feed','name' => 'News & Updates','Transactions' => ['Read','Write','Delete','Export','Special']],
            ['Group'=>'Reports','name' => 'Report','Transactions' => ['Read','Write','Delete','Export','Special']],                     
        ];

    

        $transactions = [
        	'Read','Write','Delete','Export','Special'
        ];

        foreach ($modules as $key => $module) {
        	
        	$moduleObj = new Module();

        	$moduleArray = array();
            $module_name = $module['name'] ?? ''; 
            $group_name = $module['Group'] ?? ''; 

        	$moduleArray['name'] = $module_name;
            $moduleArray['group'] = $group_name;
        	$moduleArray['slug'] = Str::slug($module_name, '-');
        	$moduleArray['description'] = '';
            $moduleArray['panel'] = 'client';
        	$moduleArray['status'] = _active();
        	$moduleArray['is_role_based'] = true;

        	$moduleObj->fill($moduleArray)->save();

        	
        	foreach ($transactions as $transact) {
                
        		$permissionObj = new Permission();

        		$permissionsArr = array();
        		$permissionsArr['module_id'] = $moduleObj->id;
        		$permissionsArr['name'] = title_case($transact).' '.$module_name;
        		$permissionsArr['slug'] = $moduleObj->slug.'-'.strtolower($transact);
        		$permissionsArr['description'] = '';
                $permissionsArr['transaction_name'] = $transact;
                if(isset($module['Transactions']) && in_array($transact,$module['Transactions'])) {
                    $permissionsArr['is_present'] = true;
                } else {
                    $permissionsArr['is_present'] = false;
                }
        		$permissionObj->fill($permissionsArr)->save();
        	}
        	

        }
    }
}
