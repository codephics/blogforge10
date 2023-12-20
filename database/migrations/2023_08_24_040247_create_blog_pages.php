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
            $table->string('name', 255);
            $table->string('title', 255);
            $table->string('slug', 255);
            $table->text('keywords')->nullable();
            $table->string('category_name', 255)->nullable();
            $table->string('subcategory_name', 255)->nullable();
            $table->string('sub_subcategory_name', 255)->nullable();
            $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->text('youtube_iframe')->nullable();
            $table->text('header_content')->nullable();
            $table->string('meta_title', 255)->nullable();
            $table->string('meta_description', 255)->nullable();
            $table->string('facebook_meta_title', 255)->nullable();
            $table->string('facebook_meta_description', 255)->nullable();
            $table->string('twitter_meta_title', 255)->nullable();
            $table->string('twitter_meta_description', 255)->nullable();
            $table->string('thumb', 255)->default('default-thumb.png');
            $table->string('thumb_alt_text', 255)->nullable();
            $table->string('breadcrumb_image', 255)->default('default-breadcrumb.png');
            $table->string('breadcrumb_alt_text', 255)->nullable();
            $table->string('cover_image', 255)->default('default-cover.png');
            $table->string('cover_alt_text', 255)->nullable();
            $table->string('og_image', 255)->default('default-og.png');
            $table->string('og_img_alt_text', 255)->nullable();
            $table->tinyInteger('is_index')->default(0)->nullable();
            $table->tinyInteger('is_follow')->default(0)->nullable();
            $table->tinyInteger('is_featured')->default(0)->nullable();
            $table->tinyInteger('status')->default(0)->nullable();
            $table->text('comment')->nullable();
            $table->timestamps();
        });

        DB::table('blog_pages')->insert([
            [
                'name' => 'Homepage',
                'title' => '',
                'slug' => 'homepage',
            ],
            [
                'name' => 'Privacy Policy',
                'title' => '',
                'slug' => 'privacy-policy',
            ],
            [
                'name' => 'Terms of Service',
                'title' => '',
                'slug' => 'terms-of-service',
            ],
            [
                'name' => 'License',
                'title' => '',
                'slug' => 'license',
            ],
            [
                'name' => 'About Us',
                'title' => '',
                'slug' => 'about-us',
            ],
            [
                'name' => 'Contact Us',
                'title' => '',
                'slug' => 'contact-us',
            ],
            [
                'name' => 'More Blogs',
                'title' => '',
                'slug' => 'more-blogs',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_pages');
    }
};
