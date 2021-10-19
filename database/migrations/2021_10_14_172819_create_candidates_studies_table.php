<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesStudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates_studies', function (Blueprint $table) {
            $table->foreignId('candidate_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('study_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->unique(['candidate_id','study_id']);
            $table->string('certificate_file')->nullable();
            $table->string('institution');
            $table->date('date_started');
            $table->date('date_finished')->nullable();
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
        Schema::dropIfExists('candidates_studies');
    }
}
