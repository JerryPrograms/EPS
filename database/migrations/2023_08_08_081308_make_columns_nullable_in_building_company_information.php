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
        Schema::table('building_company_information', function (Blueprint $table) {
            $table->string('ceo_name')->nullable()->default(null)->change();
            $table->string('address')->nullable()->default(null)->change();
            $table->string('industry_category')->nullable()->default(null)->change();
            $table->string('b_ci_sectors')->nullable()->default(null)->change();
            $table->string('contacts')->nullable()->default(null)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('building_company_information', function (Blueprint $table) {
            //
        });
    }
};
