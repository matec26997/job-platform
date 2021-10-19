<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployerRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employer_ratings', function (Blueprint $table) {
            $table->id();
            $table->enum('rating',['Very Bad','Bad','Ok','Good','Very Good']);
            $table->text('comments');
            $table->foreignId('job_placement_id')->constrained()->unique()->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('employer_ratings');
    }
}
