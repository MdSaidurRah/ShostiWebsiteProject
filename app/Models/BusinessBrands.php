<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class BusinessBrands extends Model {
    protected $table = 'partnership_brands';
    public $timestamps=false;
    protected $fillable = [
        'name', 'slug', 'address', 'company_logo', 'reference_link','status'
    ];
    
}


