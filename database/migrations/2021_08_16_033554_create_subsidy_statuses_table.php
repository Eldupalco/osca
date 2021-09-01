<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubsidyStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subsidy_statuses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('citizen_uid');
            $table->unsignedBigInteger('subsidy_uid');
            $table->string('status_receive');
            $table->date('date_receive');
            $table->timestamps();

            $table->foreign('citizen_uid')->references('id')->on('citizens')->onDelete('cascade');
            $table->foreign('subsidy_uid')->references('id')->on('subsidies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subsidy_statuses');
    }
}
