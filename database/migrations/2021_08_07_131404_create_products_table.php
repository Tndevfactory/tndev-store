<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('original_img')->nullable();
            $table->string('thumbnail_h300')->nullable();
            $table->string('thumbnail_h800')->nullable();

            $table->string('enname')->nullable();
            $table->string('frname')->nullable();
            $table->string('arname')->nullable();
            $table->string('esname')->nullable();
            $table->string('itname')->nullable();
            $table->string('dename')->nullable();


            $table->string('enslug')->unique();
            $table->string('frslug')->unique();
            $table->string('arslug')->unique();
            $table->string('esslug')->unique();
            $table->string('itslug')->unique();
            $table->string('deslug')->unique();


            $table->longtext('endescription')->nullable();
            $table->longtext('frdescription')->nullable();
            $table->longtext('ardescription')->nullable();
            $table->longtext('esdescription')->nullable();
            $table->longtext('itdescription')->nullable();
            $table->longtext('dedescription')->nullable();

            $table->foreignId('sub_category_id')->nullable();

            $table->timestamps();
             $table->softDeletes();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');

    }
}
