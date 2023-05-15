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
        Schema::table('engineers', function (Blueprint $table) {
             $table->string('rank')->nullable()->change();
             $table->string('social_security')->nullable()->change();
             $table->string('approval_rights')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('engineers', function (Blueprint $table) {
            $table->string('rank')->change();
            $table->string('social_security')->change();
            $table->string('approval_rights')->change();
        });
    }
};
