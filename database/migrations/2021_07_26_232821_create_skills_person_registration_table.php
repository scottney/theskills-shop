<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillsPersonRegistrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills_person_registration', function (Blueprint $table) {
            $table->bigincrements('id')->unsignedBigInteger();
            $table->string('first_name');
            $table->string('surname');
            $table->string('middle_name');
            $table->string('id_number')->index();
            $table->unsignedBigInteger('skills_person_service_number')->nullable()->index()->unique();
            $table->string('phone_number');
            $table->string('alternative_phone_number');
            $table->string('skills_person_email');
            $table->string('address');
            $table->string('skillset');
            $table->string('skillset_description');
            $table->string('image');
            $table->string('report');
            $table->string('letters');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skills_person_registration');
    }
}
