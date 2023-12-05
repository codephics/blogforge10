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
        Schema::create('template_blog_categories', function (Blueprint $table) {
            $table->id();
            $table->string('category_name', 199);
            $table->string('slug', 199);
            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->text('meta_title', 70)->nullable();
            $table->text('meta_description', 170)->nullable();
            $table->text('facebook_meta_title', 70)->nullable();
            $table->text('facebook_meta_description', 170)->nullable();
            $table->text('twitter_meta_title', 70)->nullable();
            $table->text('twitter_meta_description', 170)->nullable();
            $table->string('icon', 255)->default('default-icon.png');
            $table->string('icon_alt_text', 255)->nullable();
            $table->string('thumb', 255)->default('default-icon.png');
            $table->string('thumb_alt_text', 255)->nullable();
            $table->string('cover', 255)->default('default-icon.png');
            $table->string('cover_alt_text', 255)->nullable();
            $table->string('og_image', 255)->default('default-icon.png');
            $table->string('og_img_alt_text', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('template_blog_categories');
    }
};
