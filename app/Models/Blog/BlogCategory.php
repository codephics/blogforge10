<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'category_name',
        'slug',
        'title',
        'description',
        'meta_title',
        'meta_description',
        'facebook_meta_title',
        'facebook_meta_description',
        'twitter_meta_title',
        'twitter_meta_description',
        'icon',
        'icon_alt_text',
        'thumb',
        'thumb_alt_text',
        'cover',
        'cover_alt_text',
        'og_image',
        'og_img_alt_text',
    ];

    public function subcategories()
    {
        return $this->hasMany(TemplateBlogSubcategory::class, 'category_name', 'category_name');
    }

}
