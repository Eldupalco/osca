<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitizensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citizens', function (Blueprint $table) {
            $table->id();
            $table->string('citizen_id');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('suffix');
            $table->string('birth_date');
            $table->string('birth_place');
            $table->string('address');
            $table->string('sex');
            $table->string('civil_status');
            $table->string('email');
            $table->string('contact_number');
            $table->string('ips');
            $table->string('religion');
            $table->string('GSIS')->nullable();
            $table->string('SSS')->nullable();
            $table->string('TIN')->nullable();
            $table->string('PHILHEALTH')->nullable();
            $table->string('emergency_person');
            $table->string('emergency_number');
            $table->string('birth_certificate_image')->nullable();
            $table->string('citizen_id_image')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('citizens');
    }
}
