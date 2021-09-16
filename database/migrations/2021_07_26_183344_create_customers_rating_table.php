<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersRatingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers_rating', function (Blueprint $table) {
            $table->bigincrements('id')->unsignedBigInteger();
            $table->unsignedBigInteger('customers_service_number')->index()->unique();
            $table->string('rate');
            $table->timestamps();

            $table->foreign('customers_service_number')
                ->references('customers_service_number')
                ->on('customers_booking')
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
        Schema::dropIfExists('customers_rating');
    }
}
