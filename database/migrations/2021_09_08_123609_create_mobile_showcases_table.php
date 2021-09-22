<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobileShowcasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobile_showcases', function (Blueprint $table) {
            $table->id();
             $table->string('original_img')->nullable();
            $table->string('thumbnail_h300')->nullable();
            $table->string('thumbnail_h800')->nullable();
            $table->longtext('endescription')->nullable();
            $table->longtext('frdescription')->nullable();
            $table->longtext('ardescription')->nullable();
            $table->longtext('esdescription')->nullable();
            $table->longtext('itdescription')->nullable();
            $table->longtext('dedescription')->nullable();

            $table->longtext('endescription_sub')->nullable();
            $table->longtext('frdescription_sub')->nullable();
            $table->longtext('ardescription_sub')->nullable();
            $table->longtext('esdescription_sub')->nullable();
            $table->longtext('itdescription_sub')->nullable();
            $table->longtext('dedescription_sub')->nullable();

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
        Schema::dropIfExists('mobile_showcases');
    }
}
