<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumeReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resume_reviews', function (Blueprint $table) {
            $table->id();
            $table->enum('is_employer_interested',['yes','no'])->nullable();
            $table->text('comments')->nullable();
            $table->foreignId('company_representative_id')->references('id')->on('company_representatives')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('resume_reviews');
    }
}
