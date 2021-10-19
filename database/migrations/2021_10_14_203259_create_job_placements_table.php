<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobPlacementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_placements', function (Blueprint $table) {
            $table->id();
            $table->date('date_hired');
            $table->date('date_finished')->nullable();
            $table->foreignId('approved_job_id')->constrained()->unique()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('application_id')->constrained()->unique()->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('job_placements');
    }
}
