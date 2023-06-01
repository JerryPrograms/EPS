<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuildingAddress extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function GetCustomer()
    {
        return $this->hasOne(CustomerInfo::class,'building_id','id');
    }
}
