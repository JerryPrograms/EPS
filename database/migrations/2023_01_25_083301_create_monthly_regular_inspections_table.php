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
        Schema::create('monthly_regular_inspections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customer_infos')->cascadeOnDelete();
            $table->date('inspection_date');
            $table->dateTime('arrival_time');
            $table->dateTime('completion_time');
            $table->string('inspection_manager');
            $table->longText('check_contents');
            $table->longText('special_notes')->nullable();
            $table->longText('signature')->nullable();
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
        Schema::dropIfExists('monthly_regular_inspections');
    }
};
