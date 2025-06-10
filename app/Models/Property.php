<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
  
protected $fillable = [
    'title', 'price', 'description', 'address', 'status',
    'bedrooms', 'bathrooms', 'area', 'agency', 'agent',
    'media_url',
    'features', 'amount', 'price_cut_date',
];
}
