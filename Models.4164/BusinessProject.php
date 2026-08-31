<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class BusinessProject extends Model {
    protected $table = 'business_projects';
    public $timestamps=false;
    protected $fillable = [
      'name', 'slug', 'project_description','project_visibility',
       'project_photo', 'reference_link','created_by',
       'project_type','project_category','project_status'
    ];
    
}


