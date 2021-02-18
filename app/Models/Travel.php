<?php

namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class Travel extends Model
{
    use HasFactory;
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'caption', 'description', 'thumbnail', 'address', 'latitude', 'longitude',
        'image1', 'image2', 'image3', 'image4', 'image5', 'video'
    ];
}