<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('generalforms', function (Blueprint $table) {
            $table->id();
            $table->string('form_key')->unique();
            $table->string('name');
            $table->string('surname');
            $table->enum('gender', ['F', 'M','O']);
            $table->tinyInteger('maritalstatus_id');
            $table->date('birthdate');
            $table->string('street_no');
            $table->string('postcode_city');
            $table->string('telephone');
            $table->string('email');
            $table->string('employment');
            $table->string('employment_percent');
            $table->string('nationality');
            $table->tinyInteger('permission_id');
            $table->string('pname');
            $table->string('psurname');
            $table->enum('pgender', ['F', 'M','O']);
            $table->tinyInteger('pmaritalstatus_id');
            $table->date('pbirthdate');
            $table->string('pstreet_no');
            $table->string('ppostcode_city');
            $table->string('ptelephone');
            $table->string('pemail');
            $table->string('pemployment');
            $table->string('pemployment_percent');
            $table->string('pnationality');
            $table->tinyInteger('ppermission_id');  
            $table->date('date_appsubmt');
            $table->string('direct_request');
            $table->tinyInteger('child_total')->nullable();
            $table->tinyInteger('adults_total')->nullable();
            $table->text('desc_situation')->nullable();
            $table->string('needed_support')->nullable();
            $table->decimal('total_amount',$precision = 8, $scale = 2)->nullable();
            $table->decimal('balance',$precision = 8, $scale = 2);
            $table->decimal('required_financial',$precision = 8, $scale = 2);
            $table->decimal('own_contribution',$precision = 8, $scale = 2);
            $table->decimal('application_to_winter',$precision = 8, $scale = 2);
            $table->enum('aply_others',['Y','N']);
            $table->string('name_address_bank')->nullable();
            $table->string('account_holder')->nullable();
            $table->string('account_number_iban')->nullable();
            $table->string('remarks');
            $table->string('applicant');
            $table->date('apply_date');
            $table->string('third_person')->nullable();
            $table->date('third_person_date')->nullable();
            $table->string('third_person_detail')->nullable();
            $table->enum('status',['new','process','pending','passive']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('generalforms');
    }
};
