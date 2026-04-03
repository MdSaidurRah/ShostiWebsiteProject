<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
class BusinessProduct extends Model {
    protected $table = 'business_products';
    public $timestamps=false;
    protected $fillable = [
        'product_title', 'slug', 'product_defination', 'cover_photo', 'reference_link', 'product_category','created_by'
    ];
    
}


