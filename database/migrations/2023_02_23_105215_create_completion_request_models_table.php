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
        Schema::create('completion_request_models', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customer_infos')->cascadeOnDelete();
            $table->string('project_number');
            $table->string('site_name');
            $table->string('joint_name');
            $table->string('down_payment');
            $table->string('contract_amount');
            $table->string('completion_fund');
            $table->string('other_settlement_fund');
            $table->string('microbial_fund');
            $table->string('contract_date');
            $table->string('production_date');
            $table->string('completion_date');
            $table->string('confirmation_date');
            $table->longText('title');
            $table->longText('site');
            $table->longText('date');
            $table->longText('photo');
            $table->string('added_by');
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
        Schema::dropIfExists('completion_request_models');
    }
};
