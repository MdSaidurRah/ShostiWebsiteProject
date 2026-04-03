<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogContent extends Model
{
    use HasFactory;

    protected $table = 'blog_contents';

    protected $fillable = [
        'blog_id',
        'title',
        'content',
        'topic_cover_image',
        'order',
        'view_counts',
        'download_counts',
        'publish_date',
        'content_status'
    ];

    // Relation: A blog content belongs to one blog
    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}