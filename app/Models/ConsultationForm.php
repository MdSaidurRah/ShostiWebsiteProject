<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultationForm extends Model
{
    use HasFactory;
    protected $table = 'consultation_form';
    public $timestamps=false;

    protected $fillable = [
        'name',
        'phone',
        'location',
        'size',
        'type',
        'message',
    ];
}