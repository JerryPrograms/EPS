<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('engineer_companies', function (Blueprint $table) {
            $table->id();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->string('customer_number');
            $table->string('master_id');
            $table->string('password');
            $table->string('show_password');
            $table->string('company_name');
            $table->string('company_registration_number');
            $table->string('representative');
            $table->string('maintenance_business_registration_number');
            $table->string('address');
            $table->string('business_email');
            $table->string('sectors');
            $table->string('contact');
            $table->string('fax');
            $table->string('email');
            $table->string('division');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('engineer_companies');
    }
};
