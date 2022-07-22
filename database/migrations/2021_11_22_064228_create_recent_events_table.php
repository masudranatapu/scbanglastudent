<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecentEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recent_events', function (Blueprint $table) {
            $table->id();
            $table->integer('institute_id')->nullable();
            $table->longText('event_short_description')->nullable();
            $table->longText('event_long_description')->nullable();
            $table->string('event_thumbnail')->nullable();
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
        Schema::dropIfExists('recent_events');
    }
}
