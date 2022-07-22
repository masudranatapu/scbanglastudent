<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('post_title');
            $table->string('post_slug');
            $table->string('post_thumbnail')->nullable();
            $table->integer('institute_id');
            $table->longText('description')->nullable();
            $table->string('monthly_tuition_fee')->nullable();
            $table->integer('class_id')->nullable();
            $table->integer('shift_id')->nullable();
            $table->integer('group_id')->nullable();
            $table->integer('maximum_seat')->nullable();
            $table->string('gender')->nullable();
            $table->string('apply_before')->nullable();
            $table->integer('is_approved')->nullable();
            $table->integer('approved_by')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
