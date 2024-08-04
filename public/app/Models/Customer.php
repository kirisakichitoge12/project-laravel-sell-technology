<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = "customer";
    protected $primaryKey = "id";
    public function bills()
    {
        return $this->hasMany(Bill::class,'id_customer','id');
    }
}
