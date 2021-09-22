<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturedBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('featured_blogs', function (Blueprint $table) {
            $table->id();
             $table->string('original_img')->nullable();
            $table->string('thumbnail_h300')->nullable();
            $table->string('thumbnail_h800')->nullable();

            $table->string('entitle')->nullable();
            $table->string('frtitle')->nullable();
            $table->string('artitle')->nullable();
            $table->string('estitle')->nullable();
            $table->string('ittitle')->nullable();
            $table->string('detitle')->nullable();

            $table->string('enslug')->unique();
            $table->string('arslug')->unique();
            $table->string('frslug')->unique();
            $table->string('esslug')->unique();
            $table->string('itslug')->unique();
            $table->string('deslug')->unique();

            $table->longtext('enbody')->nullable();
            $table->longtext('frbody')->nullable();
            $table->longtext('arbody')->nullable();
            $table->longtext('esbody')->nullable();
            $table->longtext('itbody')->nullable();
            $table->longtext('debody')->nullable();

            $table->foreignId('blog_category_id')->nullable();
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
        Schema::dropIfExists('featured_blogs');
    }
}
