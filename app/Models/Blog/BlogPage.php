<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPage extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'title',
        'slug',
        'tags',
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
        'thumb',
        'thumb_alt_text',
        'breadcrumb_image',
        'breadcrumb_alt_text',
        'cover_image',
        'cover_alt_text',
        'og_image',
        'og_img_alt_text',
        'status',
        'comment',
    ];
}
