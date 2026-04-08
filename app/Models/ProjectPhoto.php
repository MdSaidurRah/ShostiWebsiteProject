<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
class ProjectPhoto extends Model {
    protected $table = 'project_photos';
    
    public $timestamps=false;

    protected $fillable = [
        'project_id', 'photo_title', 'photo_url', 'photo_status', 'created_by', 'updated_by'
    ];

}

