<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('fullname');
            $table->string('email');
            $table->string('custumer_address');
            $table->string('current_address');
            $table->string('destination_address');
            $table->string('zip_code');
            $table->string('phone_number');
            $table->string('tracking_number')->unique();

            $table->string('sender_fullname');
            $table->string('sender_email');
            $table->string('sender_current_address');
            $table->string('sender_zip_code');
            $table->string('sender_phone_number');

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
        Schema::dropIfExists('clients');
    }
}

