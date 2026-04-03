<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Employee extends Model
{
    protected $table = 'employee';
    public $timestamps = false;
    protected $fillable = [
        'project_id',
        'employee_name',
        'designation',
        'contact_no',
        'email',
        'monthly_salary',
        'branch_name',
        'photograph',
        'date_of_join',
        'employee_status',
        'entityObjectOrder',
    ];
    public static function boot()
    {
        parent::boot();
        static::creating(function ($post) {
            $post->createdBy = Session::get('userId');
        });
        static::updating(function ($post) {
            $post->updatedBy = Session::get('userId');
        });
    }
}
