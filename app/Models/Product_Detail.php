<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_Detail extends Model
{
    use HasFactory;
    protected $table = "product_detail";
    protected $primaryKey = "id";
    public  function products_type()
    {
        return $this->belongsTo(Products_Type::class,'id_detail','id');
    }
    
}
