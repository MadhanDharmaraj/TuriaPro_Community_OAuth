<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    protected $connection;
    public function __construct()
    {
        $this->connection = getConnection2();
    }
    public function up()
    {
        
        Schema::connection($this->connection)->create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('organization_id');
            $table->foreign('organization_id')->references('id')->on('organizations')->onDelete('cascade');

            $table->unsignedTinyInteger('contact_type_id');

            $table->string('name');
            $table->string('email');
            $table->string('contact_no');

            $table->text('ba_address_line_1')->comment('prefix ba stands for billing address');
            $table->text('ba_address_line_2');
            $table->unsignedMediumInteger('ba_country_id');
            $table->unsignedBigInteger('ba_state_id');
            $table->string('ba_city')->nullable();
            $table->string('ba_pin_zip_code');
            $table->boolean('same_as_ba_for_sa');

            $table->text('sa_address_line_1')->nullable()->comment('prefix sa stands for shipping address');
            $table->text('sa_address_line_2')->nullable();
            $table->unsignedMediumInteger('sa_country_id');
            $table->unsignedBigInteger('sa_state_id');
            $table->string('sa_city')->nullable();
            $table->string('sa_pin_zip_code')->nullable();

            $table->unsignedTinyInteger('person_salutation')->nullable();
            $table->string('person_first_name')->nullable();
            $table->string('person_last_name')->nullable();
            $table->string('person_email')->nullable();
            $table->unsignedMediumInteger('person_contact_no')->nullable();

            $table->unsignedMediumInteger('currency_id');
            $table->unsignedBigInteger('gst_registration_type_id');
            $table->string('gstin')->nullable();
            $table->unsignedTinyInteger('tax_prefence_id')->comment('1 => Taxable, 2 => Extempt Tax');
            $table->unsignedBigInteger('exemption_reason_id')->comment('Only Fill on tax_prefence_id is 2');

            $table->json('starred_by')->nullable();
            $table->boolean('status');
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by');
            $table->softDeletes();
            $table->timestamps();

            $table->index(['organization_id']);

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
