<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
class BusinessClient extends Model {
    protected $table = 'business_clients';
    public $timestamps=false;
    protected $fillable = [
        'client_name', 'slug', 'address', 'company_logo', 'reference_link','status'
    ];
    
}


