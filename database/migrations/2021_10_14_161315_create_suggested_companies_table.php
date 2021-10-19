<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuggestedCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suggested_companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('business_name');
            $table->string('country');
            $table->string('industry');
            $table->string('phone_number');
            $table->string('alternative_phone')->nullable();
            $table->string('website')->nullable();
            $table->string('logo')->nullable();
            $table->text('physical_address');
            $table->text('mission')->nullable();
            $table->text('vision')->nullable();
            $table->string('employee_handbook')->nullable();
            $table->string('ruc_number')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suggested_companies');
    }
}
