<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJamatTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jamat_times', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->text('sub_title')->nullable();
            $table->text('Fajr_weekdays')->nullable();
            $table->text('Fajr_weekends')->nullable();
            $table->text('Dhuhr_weekdays')->nullable();
            $table->text('Dhuhr_weekends')->nullable();
            $table->text('Asr_weekdays')->nullable();
            $table->text('Asr_weekends')->nullable();
            $table->text('Magrib_weekdays')->nullable();
            $table->text('Magrib_weekends')->nullable();
            $table->text('Isha_weekdays')->nullable();
            $table->text('Isha_weekends')->nullable();
            $table->text('Jummah_weekdays')->nullable();
            $table->text('Jummah_weekends')->nullable();
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
        Schema::dropIfExists('jamat_times');
    }
}
