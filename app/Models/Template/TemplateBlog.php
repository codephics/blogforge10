<?php

namespace App\Models\Template;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateBlog extends Model
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
        'header_title',
        'category_name',
        'subcategory_name',
        'sub_subcategory_name',
        'template',
        'seller_name',
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
        'is_featured',
        'featured_image',
        'featured_img_alt_text',
        'file',
        'og_image',
        'og_img_alt_text',
        'status',
        'comment',
    ];
}
