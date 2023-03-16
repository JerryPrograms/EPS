<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CustomerInfo;

class MonthlyRegularInspection extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = ['inspection_date'=>'datetime'];

    public function getCustomer()
    {
        return $this->hasOne(CustomerInfo::class, 'id', 'customer_id')->with(['BuildingInformation','ParkingFacilityCertificate']);
    }
}
