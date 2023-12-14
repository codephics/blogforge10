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
        Schema::create('blog_subcategories', function (Blueprint $table) {
            $table->id();
            $table->string('subcategory_name', 255);
            $table->string('slug', 255);
            $table->text('title')->nullable();
            $table->string('category_name', 255);
            $table->string('description', 255)->nullable();
            $table->string('meta_title', 255)->nullable();
            $table->string('meta_description', 255)->nullable();
            $table->string('facebook_meta_title', 255)->nullable();
            $table->string('facebook_meta_description', 255)->nullable();
            $table->string('twitter_meta_title', 255)->nullable();
            $table->string('twitter_meta_description', 255)->nullable();
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
        Schema::dropIfExists('blog_subcategories');
    }
};
