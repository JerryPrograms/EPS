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
        Schema::table('completion_request_models', function (Blueprint $table) {
            $table->string('project_number')->nullable()->default(null)->change();
            $table->string('site_name')->nullable()->default(null)->change();
            $table->string('joint_name')->nullable()->default(null)->change();
            $table->string('down_payment')->nullable()->default(null)->change();
            $table->string('contract_amount')->nullable()->default(null)->change();
            $table->string('completion_fund')->nullable()->default(null)->change();
            $table->string('other_settlement_fund')->nullable()->default(null)->change();
            $table->string('microbial_fund')->nullable()->default(null)->change();
            $table->string('production_date')->nullable()->default(null)->change();
            $table->string('completion_date')->nullable()->default(null)->change();
            $table->string('confirmation_date')->nullable()->default(null)->change();
            $table->longText('title')->nullable()->default(null)->change();
            $table->longText('site')->nullable()->default(null)->change();
            $table->longText('date')->nullable()->default(null)->change();
            $table->longText('photo')->nullable()->default(null)->change();
            $table->longText('construction_completion_file')->after('customer_id')->nullable()->default(null);
            $table->longText('construction_description')->after('customer_id')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('completion_request_models', function (Blueprint $table) {
            //
        });
    }
};
