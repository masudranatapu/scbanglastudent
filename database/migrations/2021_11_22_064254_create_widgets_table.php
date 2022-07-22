<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWidgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('widgets', function (Blueprint $table) {
            $table->id();
            $table->integer('institute_id');
            $table->string('widget_one_title')->nullable();
            $table->string('widget_one_heading')->nullable();
            $table->longText('widget_short_description')->nullable();
            $table->longText('widget_long_description')->nullable();
            $table->string('widget_one_image')->nullable();
            $table->string('widget_one_image_bottom_text')->nullable();
            $table->string('widget_two_title')->nullable();
            $table->string('widget_two_heading')->nullable();
            $table->longText('widget_short_two_description')->nullable();
            $table->longText('widget_long_two_description')->nullable();
            $table->string('widget_two_image')->nullable();
            $table->string('widget_two_image_bottom_text')->nullable();
            $table->string('notice_title')->nullable();
            $table->longText('notice')->nullable();
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
        Schema::dropIfExists('widgets');
    }
}
