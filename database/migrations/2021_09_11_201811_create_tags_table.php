<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();

            $table->string('original_img')->nullable();
            $table->string('thumbnail_h300')->nullable();
            $table->string('thumbnail_h800')->nullable();

            $table->string('enname')->unique();
            $table->string('frname')->unique();
            $table->string('arname')->unique();
            $table->string('esname')->unique();
            $table->string('itname')->unique();
            $table->string('dename')->unique();


            $table->longtext('endescription')->nullable();
            $table->longtext('frdescription')->nullable();
            $table->longtext('ardescription')->nullable();
            $table->longtext('esdescription')->nullable();
            $table->longtext('itdescription')->nullable();
            $table->longtext('dedescription')->nullable();

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
        Schema::dropIfExists('tags');
    }
}
