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
        Schema::create('inspection_certificates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customer_infos')->cascadeOnDelete();
            $table->string('inspection_type');
            $table->string('manager_name');
            $table->string('installation_place');
            $table->string('inspection_period_from');
            $table->string('inspection_period_to');
            $table->string('inspection_certificate');
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
        Schema::dropIfExists('inspection_certificates');
    }
};
