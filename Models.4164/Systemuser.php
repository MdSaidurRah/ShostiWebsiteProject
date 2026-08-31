<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Systemuser extends Model
{

    protected $table = 'users';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'lastName',
        'email',
        'userContactNo',
        'password',
        'userRole',
        'userStatus',
        'userPhoto',
        'designation',
        'department',
        'systemUniqueId',
        'createdBy'
    ];




}
