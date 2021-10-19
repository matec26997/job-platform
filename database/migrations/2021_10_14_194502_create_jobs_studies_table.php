<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsStudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs_studies', function (Blueprint $table) {
            $table->foreignId('job_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('study_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->unique(['job_id','study_id']);
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
        Schema::dropIfExists('jobs_studies');
    }
}
