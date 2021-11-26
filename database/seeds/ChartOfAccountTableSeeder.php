<?php

use Illuminate\Database\Seeder;
use App\Model\ChartOfAccount;
use Carbon\Carbon;

class ChartOfAccountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $date = Carbon::now()->toDateTimeString();

        $definedCoaArray = config('coa.defined_coa');

        $common = [
            'created_at' => $date,
            'is_seeded' => true,       
        ];

        if(count($definedCoaArray)) {
            foreach ($definedCoaArray as $key => $coaArray) {                
                $coaArray['code'] = importCode($coaArray['name']);
                if(isset($coaArray['parent_key'])) {
                    $parent_account = ChartOfAccount::where('key',$coaArray['parent_key'])->first();

                    if(!empty($parent_account) && isset($parent_account->id)) {
                        
                        $coaArray['parent_id'] = $parent_account->id;
                        $coaArray['depth_allowed'] = (int)$parent_account->depth_allowed-1;                        
                    }
                } else {
                    $coaArray['parent_id'] = 0;
                }

                $insert_arr = array();
                $insert_arr = array_merge($coaArray,$common);
                ChartOfAccount::insert($insert_arr);
            }
        }
        
    }
}
