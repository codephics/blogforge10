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
        'is_featured',
        'featured_image',
        'file',
        'og_image',
        'status',
        'comment',
    ];
}
