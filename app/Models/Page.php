<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Page extends Model
{
    use HasFactory, HasTranslations;

    protected $guarded = [];

    public $translatable = [
        'title',
        'slug',
        'anchor_background',
        'meta_title',
        'meta_keyword',
        'meta_description'
    ];

    public function category()
    {
        return $this->belongsTo(PageCategory::class, 'category_id');
    }   
}
