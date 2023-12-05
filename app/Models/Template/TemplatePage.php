<?php

namespace App\Models\Template;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplatePage extends Model
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
        'thumb',
        'breadcrumb_image',
        'cover_image',
        'og_image',
        'status',
        'comment',
    ];
}
