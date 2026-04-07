<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class PromotionalVideo extends Model
{
    protected $table = 'promotional_videos';
    public $timestamps = false;
    protected $fillable = [
        'video_title',
        'slug',
        'video_thumbnail',
        'reference_link',
        'video_source',
        'status',
        'video_category'
    ];
}
