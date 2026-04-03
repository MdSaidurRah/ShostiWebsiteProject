<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'category_id',
        'title',
        'short_note',
        'slug',
        'content',
        'cover_image',
        'author',
        'publish_date',
        'view_counts',
        'download_counts',
        'status',
        'created_by',
        'updated_by',
    ];

    protected $casts = [
        'publish_date' => 'date',
        'view_counts' => 'integer',
        'download_counts' => 'integer'
    ];


}