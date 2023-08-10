<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PageCategory extends Model
{
    use HasFactory, HasTranslations;

    protected $guarded = [];

    protected $translatable = [
        'name',
        'slug'
    ];

    public function parent()
    {
        return $this->belongsTo(PageCategory::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(PageCategory::class, 'parent_id');
    }

    public function pages()
    {
        return $this->hasMany(Page::class, 'category_id');
    }
}
