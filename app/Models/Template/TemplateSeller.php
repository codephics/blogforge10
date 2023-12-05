<?php

namespace App\Models\Template;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateSeller extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug',
        'gender',
        'bio',
        'mobile',
        'email',
        'address',
        'description',
        'youtube_iframe',
        'meta_title',
        'meta_description',
        'image',
        'og_image',
        'banner',
        'status',
    ];
}
