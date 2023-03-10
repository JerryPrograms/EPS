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
        Schema::create('dispatch_information_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customer_infos')->cascadeOnDelete();
            $table->string('site_name');
            $table->dateTime('reception_date_and_time');
            $table->string('model_and_type');
            $table->string('submission_details');
            $table->string('failure_cause');
            $table->string('measures');
            $table->string('undecided');
            $table->string('dispatcher');
            $table->string('output');
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
        Schema::dropIfExists('dispatch_information_data');
    }
};
