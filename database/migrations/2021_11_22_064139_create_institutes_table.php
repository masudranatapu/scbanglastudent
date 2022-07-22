<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutes', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('institute_type_id');
            $table->integer('sub_institute_type_id');
            $table->integer('education_board_id')->nullable();
            $table->integer('division_id')->nullable();
            $table->integer('district_id')->nullable();
            $table->string('institute_name')->nullable();
            $table->string('institute_slug')->nullable();
            $table->string('headmaster_principal_name')->nullable();
            $table->string('logo')->nullable();
            $table->string('cover_photo')->nullable();
            $table->integer('eiin_code')->nullable();
            $table->string('established_in')->nullable();
            $table->string('member_since')->nullable();
            $table->integer('total_student')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('instgram_link')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->string('division_rank')->nullable();
            $table->string('district_rank')->nullable();
            $table->string('banglastudent_rank')->nullable();
            $table->longText('description')->nullable();
            $table->string('location')->nullable();
            $table->string('website')->nullable();
            $table->string('phone')->nullable();
            $table->string('is_approved')->nullable()->comment('0 = No,1 = Yes');
            $table->string('approved_by')->nullable();
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
        Schema::dropIfExists('institutes');
    }
}
