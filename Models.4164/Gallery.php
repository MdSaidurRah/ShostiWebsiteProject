<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Gallery extends Model {
    protected $table = 'gallery';
    public $timestamps=false;
    protected $fillable = [
         'title', 'slug', 'gallery_image', 'reference_link', 'item_category', 'status'
    ];
    
}

