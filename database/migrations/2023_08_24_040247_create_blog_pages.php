<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blog_pages', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('title', 100);
            $table->string('slug', 100);
            $table->string('tags', 255)->nullable();
            $table->string('category_name', 100)->nullable();
            $table->string('subcategory_name', 100)->nullable();
            $table->string('sub_subcategory_name', 100)->nullable();
            $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->text('youtube_iframe')->nullable();
            $table->text('header_content')->nullable();
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('facebook_meta_title')->nullable();
            $table->text('facebook_meta_description')->nullable();
            $table->text('twitter_meta_title')->nullable();
            $table->text('twitter_meta_description')->nullable();
            $table->string('thumb', 255)->default('default-thumb.png');
            $table->string('thumb_alt_text', 255)->nullable();
            $table->string('breadcrumb_image', 255)->default('default-breadcrumb.png');
            $table->string('breadcrumb_alt_text', 255)->nullable();
            $table->string('cover_image', 255)->default('default-cover.png');
            $table->string('cover_alt_text', 255)->nullable();
            $table->string('og_image', 255)->default('default-og.png');
            $table->string('og_img_alt_text', 255)->nullable();
            $table->tinyInteger('status')->default(0)->nullable();
            $table->text('comment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_pages');
    }
};
