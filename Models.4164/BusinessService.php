<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
class BusinessService extends Model {
    protected $table = 'business_services';
    public $timestamps=false;
    protected $fillable = [
      'service_title', 'slug', 'service_defination', 'cover_photo', 'reference_link','created_by','status'
    ];
    
}


