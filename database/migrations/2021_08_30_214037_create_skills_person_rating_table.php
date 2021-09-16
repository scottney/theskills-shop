<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillsPersonRatingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills_person_rating', function (Blueprint $table) {
            $table->bigincrements('id')->unsignedBigInteger();
            $table->unsignedBigInteger('skills_person_service_number')->nullable()->index()->unique();
            $table->string('rate');
            $table->timestamps();

            $table->foreign('skills_person_service_number')
                ->references('skills_person_service_number')
                ->on('skills_person_registration')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skills_person_rating');
    }
}
