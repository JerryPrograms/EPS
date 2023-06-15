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
        Schema::table('customer_infos', function (Blueprint $table) {
            $table->string('representative')->nullable()->change();
            $table->string('maintenance_business_registration_number')->nullable()->change();
            $table->string('address')->nullable()->change();
            $table->string('business_email')->nullable()->change();
            $table->string('sectors')->nullable()->change();
            $table->string('contact')->nullable()->change();
            $table->string('fax')->nullable()->change();
        });

        Schema::table('engineer_companies', function (Blueprint $table) {

            $table->string('representative')->nullable()->change();
            $table->string('maintenance_business_registration_number')->nullable()->change();
            $table->string('address')->nullable()->change();
            $table->string('business_email')->nullable()->change();
            $table->string('sectors')->nullable()->change();
            $table->string('contact')->nullable()->change();
            $table->string('fax')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
};
