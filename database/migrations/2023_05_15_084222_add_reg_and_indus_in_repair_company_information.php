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
        Schema::table('repair_company_information', function (Blueprint $table) {
            $table->string('mc_reg')->default('Not Set');
            $table->string('indus')->default('Not Set');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('repair_company_information', function (Blueprint $table) {
            $table->dropColumn('mc_reg');
            $table->dropColumn('indus');
        });
    }
};
