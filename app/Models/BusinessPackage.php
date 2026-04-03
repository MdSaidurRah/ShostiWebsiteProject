<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class BusinessPackage extends Model
{
  protected $table = 'business_packages';
  public $timestamps = false;
  protected $fillable = [
    'slug',
    'title',
    'description',
    'duration',
    'price',
    'size',
    'cover_photo',
    'reference_link',
    'status',
  ];
}
