<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogSetting extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'name',
        'about_in_short',
        'facebook_url',
        'twitter_url',
        'instagram_url',
        'linkedIn_url',
        'pinterest_url',
        'reddit_url',
        'tiktok_url',
        'whatsapp_url',
        'youtube_url',
        'quora_url',
        'snapchat_url',
        'telegram_url',
        'tumblr_url',
        'wechat_url',
        'youtube_iframe',
        'header_content',
        'meta_title',
        'meta_description',
        'facebook_meta_title',
        'facebook_meta_description',
        'twitter_meta_title',
        'twitter_meta_description',
        'favicon_apple_alt_text',
        'favicon_apple',
        'favicon_32_alt_text',
        'favicon_32',
        'favicon_16_alt_text',
        'favicon_16',
        'logo_alt_text',
        'logo',
        'cover_alt_text',
        'cover_image',
        'og_img_alt_text',
        'og_image',
        'is_index',
        'is_follow',
        'comment',
    ];
}
