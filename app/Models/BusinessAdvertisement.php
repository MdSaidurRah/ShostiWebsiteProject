<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
class BusinessAdvertisement extends Model {
    protected $table = 'business_advertisements';
    public $timestamps=false;
    protected $fillable = [
        'ad_title', 'slug', 'cover_photo', 'reference_link', 'created_by','ad_category'
    ];
    
}


