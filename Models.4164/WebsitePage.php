<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsitePage extends Model
{
    use HasFactory;

    protected $table = 'website_pages';

    protected $fillable = [
        'title',
        'slug',
        'content',
        'category_id',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'status',
        'created_by',
        'updated_by',
    ];

}