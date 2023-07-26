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
        Schema::table('a_s_information', function (Blueprint $table) {
            $table->string('repair_company_name')->nullable()->default(null)->change();
            $table->string('contract_date')->nullable()->default(null)->change();
            $table->string('fee')->nullable()->default(null)->change();
            $table->string('invoice_issue_date')->nullable()->default(null)->change();
            $table->string('payment_date')->nullable()->default(null)->change();
            $table->string('payment_method')->nullable()->default(null)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('a_s_information', function (Blueprint $table) {
            //
        });
    }
};
