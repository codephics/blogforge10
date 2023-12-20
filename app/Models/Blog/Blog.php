<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'slug',
        'tags',
        'author',
        'category_name',
        'subcategory_name',
        'sub_subcategory_name',
        'short_description',
        'long_description',
        'youtube_iframe',
        'header_content',
        'meta_title',
        'meta_description',
        'facebook_meta_title',
        'facebook_meta_description',
        'twitter_meta_title',
        'twitter_meta_description',
        'is_index',
        'is_follow',
        'is_featured',
        'featured_img_alt_text',
        'featured_image',
        'og_img_alt_text',
        'og_image',
        'status',
        'comment',
    ];
}
