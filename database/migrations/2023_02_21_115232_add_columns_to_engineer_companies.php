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
        Schema::table('engineer_companies', function (Blueprint $table) {
            $table->longText('address')->nullable()->default('address...');
            $table->string('manager_name',100)->nullable()->default('manager name...');
            $table->string('contract_number',100)->nullable()->default('00-0000-0000');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('engineer_companies', function (Blueprint $table) {
            //
        });
    }
};
