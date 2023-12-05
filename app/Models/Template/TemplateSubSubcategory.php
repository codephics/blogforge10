<?php

namespace App\Models\Template;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateSubSubcategory extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'sub_subcategory_name',
        'subcategory_name',
        'slug',
        'category_name',
        'description',
        'meta_title',
        'meta_description',
        'icon',
        'thumb',
        'cover',
        'og_image',
    ];

    public function templates()
    {
        return $this->hasMany(Template::class, 'sub_subcategory_name', 'sub_subcategory_name');
    }


}
