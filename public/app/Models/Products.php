<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products_Type;

class Products extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $primaryKey = "id";
    public function product_type()
    {
        return $this->belongsTo(Products_Type::class,'id_type','id');
    }
}