<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('location');
            $table->text('description');
            $table->foreignId('suggested_company_id')->references('id')->on('suggested_companies')->nullable();
            $table->foreignId('company_id')->constrained()->nullable();
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->foreignId('job_type_id')->references('id')->on('job_types')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('candidate_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('experiences');
    }
}
