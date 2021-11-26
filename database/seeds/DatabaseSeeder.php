<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*Default*/
        $this->call(CountriesTableSeeder::class);
        $this->call(StateSeeder::class);
        
        $this->call(CurrenciesTableSeeder::class);

        /*General*/
        $this->call(ConfigurationTableSeeder::class);

        /*Writted Seeders*/
        $this->call(PlanValiditySeeder::class);

        /*Database Table*/
        $this->call(DatabaseTableSeeder::class);

        /*Other Masters*/
        $this->call(BusinessTypeSeeder::class);
        $this->call(BusinessEntitiesTableSeeder::class);
        $this->call(ChartOfAccountTableSeeder::class);
        $this->call(UnitTypeSeeder::class);
        $this->call(DesignationSeeder::class);
        $this->call(UserSeeder::class);
        

        $this->call(ModulePermissionSeeder::class);
        $this->call(RoleSeeder::class);
                
        // $this->call(EmploymentTypeSeeder::class);
        // $this->call(InventoryReasonSeeder::class);
        // $this->call(InventoryAdjustmentReasonSeeder::class);
        // $this->call(ExemptionReasonSeeder::class);
        // $this->call(LawCategorySeeder::class);
        // $this->call(GstRegistrationTypeSeeder::class);

        
        
    }
}
