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
        Schema::table('building_information', function (Blueprint $table) {
            $table->string('building_manager_name')->nullable()->default(null)->change();
            $table->string('building_manager_contact')->nullable()->default(null)->change();
            $table->string('manager_contact')->nullable()->default(null)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('building_information', function (Blueprint $table) {
            //
        });
    }
};
