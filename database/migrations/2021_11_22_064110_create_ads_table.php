<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->longText('adone_script')->nullable();
            $table->longText('adtwo_script')->nullable();
            $table->longText('adthree_script')->nullable();
            $table->longText('adfour_script')->nullable();
            $table->longText('adfive_script')->nullable();
            $table->longText('adsix_script')->nullable();
            $table->longText('adseven_script')->nullable();
            $table->longText('adeight_script')->nullable();
            $table->longText('adnine_script')->nullable();
            $table->longText('adten_script')->nullable();
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
        Schema::dropIfExists('ads');
    }
}
