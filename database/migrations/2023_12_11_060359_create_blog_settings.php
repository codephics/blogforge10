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
        Schema::create('blog_settings', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255)->nullable();
            $table->string('tagline', 255)->nullable();
            $table->text('youtube_iframe')->nullable();
            $table->text('header_content')->nullable();
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('facebook_meta_title')->nullable();
            $table->text('facebook_meta_description')->nullable();
            $table->text('twitter_meta_title')->nullable();
            $table->text('twitter_meta_description')->nullable();
            $table->string('favicon_apple_alt_text', 255)->default('apple-touch-icon.png')->nullable();
            $table->string('favicon_apple', 255)->nullable();
            $table->string('favicon_32_alt_text', 255)->default('favicon-32x32.png')->nullable();
            $table->string('favicon_32', 255)->nullable();
            $table->string('favicon_16_alt_text', 255)->default('favicon-16x16.png')->nullable();
            $table->string('favicon_16', 255)->nullable();
            $table->string('logo_alt_text', 255)->default('logo.png')->nullable();
            $table->string('logo', 255)->nullable();
            $table->string('cover_image', 255)->default('default-cover.png')->nullable();
            $table->string('cover_alt_text', 255)->nullable();
            $table->string('og_image', 255)->default('default-og.png')->nullable();
            $table->string('og_img_alt_text', 255)->nullable();
            $table->tinyInteger('is_index')->default(0)->nullable();
            $table->tinyInteger('is_follow')->default(0)->nullable();
            $table->text('comment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_settings');
    }
};
