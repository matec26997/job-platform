<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->enum('is_seen_by_company',['yes','no'])->default('no');
            $table->date('date_seen')->nullable();
            $table->enum('has_first_contact',['yes','no'])->default('no');
            $table->date('date_contacted')->nullable();
            $table->enum('has_first_interview',['yes','no'])->default('no');
            $table->date('date_interviewed')->nullable();
            $table->foreignId('approved_job_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('approved_job_review_id')->constrained()->unique()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('candidate_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->unique(['approved_job_id','candidate_id']);
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
        Schema::dropIfExists('applications');
    }
}
