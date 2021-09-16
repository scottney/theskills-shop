<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers_booking', function (Blueprint $table) {
            $table->bigincrements('id')->unsignedBigInteger();
            $table->string('first_name');
            $table->string('surname');
            $table->string('middle_name');
            $table->string('id_number')->index();
            $table->unsignedBigInteger('customers_service_number')->nullable()->index()->unique();
            $table->string('phone_number');
            $table->string('alternative_phone_number');
            $table->string('email');
            $table->string('address');
            $table->string('services');
            $table->string('service_required');
            $table->date('service_date');
            $table->time('service_time');
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
        Schema::dropIfExists('customers_booking');
    }
}
