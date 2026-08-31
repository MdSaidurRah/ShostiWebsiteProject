<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class SiteBanner extends Model {
    protected $table = 'site_banners';
    public $timestamps=false;
    protected $fillable = [
         'banner_title', 'slug', 'banner_image', 'reference_link', 'banner_category', 'status'
    ];
    
}

