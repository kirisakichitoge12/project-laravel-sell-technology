<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products_Type extends Model
{
    use HasFactory;
    protected $table = "type_products";
    protected $primaryKey = "id";
    public  function products()
    {
        return $this->hasMany(Products::class,'id_type','id');
    }
    public  function products_detail()
    {
        return $this->belongsTo(Products_Type::class,'id_detail','id');
    }
    
}
