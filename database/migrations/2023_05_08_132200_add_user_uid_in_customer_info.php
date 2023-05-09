<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customer_infos', function (Blueprint $table) {
            $table->string('user_uid');
            $table->string('engineer_company_id')->nullable();
            $table->string('added_by')->nullable();
            $table->string('added_by_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customer_infos', function (Blueprint $table) {
            $table->dropColumn('user_uid');
            $table->dropColumn('engineer_company_id')->nullable();
            $table->string('added_by')->nullable();
            $table->string('added_by_id')->nullable();
        });
    }
};
