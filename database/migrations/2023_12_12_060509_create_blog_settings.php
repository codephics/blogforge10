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
            $table->text('about_in_short')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('linkedIn_url')->nullable();
            $table->string('pinterest_url')->nullable();
            $table->string('reddit_url')->nullable();
            $table->string('tiktok_url')->nullable();
            $table->string('whatsapp_url')->nullable();
            $table->string('youtube_url')->nullable();
            $table->string('quora_url')->nullable();
            $table->string('snapchat_url')->nullable();
            $table->string('telegram_url')->nullable();
            $table->string('tumblr_url')->nullable();
            $table->string('wechat_url')->nullable();
            $table->string('favicon_apple_alt_text', 255)->nullable();
            $table->string('favicon_apple', 255)->default('apple-touch-icon.png');
            $table->string('favicon_alt_text', 255)->nullable();
            $table->string('favicon', 255)->default('favicon.png');
            $table->string('favicon_32_alt_text', 255)->nullable();
            $table->string('favicon_32', 255)->nullable()->default('favicon-32x32.png');
            $table->string('favicon_16_alt_text', 255)->nullable();
            $table->string('favicon_16', 255)->default('favicon-16x16.png');
            $table->string('logo_alt_text', 255)->nullable();
            $table->string('logo', 255)->default('logo.png');
            $table->string('og_img_alt_text', 255)->nullable();
            $table->string('og_image', 255)->default('default-og.png');
            $table->tinyInteger('is_index')->default(0)->nullable();
            $table->tinyInteger('is_follow')->default(0)->nullable();
            $table->text('comment')->nullable();
            $table->timestamps();
        });

        DB::table('blog_settings')->insert([
            [
                'title' => 'BlogForge10',
                'tagline' => 'Elevate Your Blogging Experience with BlogForge10.',
                'about_in_short' => 'Discover BlogForge10 🚀 - Your ultimate blogging companion. Streamline content creation, ensure security, and enjoy cross-platform flexibility. Unleash optimized performance and gain insights with analytics. Join us at codephics.com for a simplified, powerful blogging experience!',
                'facebook_url' => 'https://facebook.com/codephics',
                'twitter_url' => 'https://twitter.com/codephics',
                'instagram_url' => 'https://instagram.com/codephics',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_settings');
    }
};
