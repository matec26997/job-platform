<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->string('major');
            $table->string('minor')->nullable();
            $table->unsignedInteger('credits_required');
            $table->unsignedInteger('credits_earned');
            $table->decimal('gpa',3,2);
            $table->date('graduation_date')->nullable();
            $table->string('resume_url')->nullable();
            $table->string('cover_letter_url')->nullable();
            $table->text('self_description')->nullable();
            $table->string('linkedin_profile')->nullable();
            $table->unsignedInteger('administrator_reviews')->default(0);
            $table->enum('potential_candidate', ['yes','no'])->default('no');
            $table->foreignId('academic_standing_id')->references('id')->on('academic_standings')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('academic_status_id')->references('id')->on('academic_statuses')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->unique()->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('candidates');
    }
}
