<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class SystemInformation extends Model
{
    protected $table = 'system_information';
    public $timestamps = false;
    protected $fillable = [
        'information_key', 
        'information_value', 
        'information_key_status',
    ];
}
