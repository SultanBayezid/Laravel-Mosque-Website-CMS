<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrayerTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prayer_times', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->text('sub_title')->nullable();
            $table->text('Fajr_times')->nullable();
            $table->text('Sunrise')->nullable();
            $table->text('Dhuhr_times')->nullable();
            $table->text('Asr_times')->nullable();
            $table->text('Magrib_times')->nullable();
            $table->text('Isha_times')->nullable();
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
        Schema::dropIfExists('prayer_times');
    }
}
