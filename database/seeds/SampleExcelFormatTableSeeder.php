<?php

use Illuminate\Database\Seeder;
use App\Model\SampleExcelFormat;
use Carbon\Carbon;

class SampleExcelFormatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$insert_arr = array();
        
        $current_date_time = Carbon::now()->toDateTimeString();

        $insert_arr = [
        [
            'name' => 'Items',
            'import_type' => 'items',
            'file_id'=>'ItemsImport.xlsx',
            'status' => 1,
            'created_at' => $current_date_time,
            'updated_at' => $current_date_time,
        ],
        [
            'name' => 'Customer',
            'import_type' => 'customer',
            'file_id'=>'CustomerImport.xlsx',
            'status' => 1,
            'created_at' => $current_date_time,
            'updated_at' => $current_date_time,
        ],
        [
            'name' => 'Vendor',
            'import_type' => 'vendor',
            'file_id'=>'VendorImport.xlsx',
            'status' => 1,
            'created_at' => $current_date_time,
            'updated_at' => $current_date_time,
        ],
        [
            'name' => 'Invoice',
            'import_type' => 'invoice',
            'file_id'=>'InvoiceImport.xlsx',
            'status' => 1,
            'created_at' => $current_date_time,
            'updated_at' => $current_date_time,
        ],
        [
            'name' => 'Purchase',
            'import_type' => 'purchase',
            'file_id'=>'PurchaseImport.xlsx',
            'status' => 1,
            'created_at' => $current_date_time,
            'updated_at' => $current_date_time,
        ],
        [
            'name' => 'Bill Payments',
            'import_type' => 'billpayments',
            'file_id'=>'BillPaymentsImport.xlsx',
            'status' => 1,
            'created_at' => $current_date_time,
            'updated_at' => $current_date_time,
        ],
        [
            'name' => 'Recieved Payments',
            'import_type' => 'recievedpayments',
            'file_id'=>'RecievedPaymentsImport.xlsx',
            'status' => 1,
            'created_at' => $current_date_time,
            'updated_at' => $current_date_time,
        ],
        [
            'name' => 'Journals',
            'import_type' => 'journals',
            'file_id'=>'JournalsImport.xlsx',
            'status' => 1,
            'created_at' => $current_date_time,
            'updated_at' => $current_date_time,
        ],
        [
            'name' => 'Transactions',
            'import_type' => 'transactions',
            'file_id'=>'TransactionsImport.xlsx',
            'status' => 1,
            'created_at' => $current_date_time,
            'updated_at' => $current_date_time,
        ],
           
   ];

        
        SampleExcelFormat::insert($insert_arr);
    }
}