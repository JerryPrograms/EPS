<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerInfo extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function BuildingInformation()
    {
        return $this->hasOne(BuildingInformation::class, 'customer_id', 'id');
    }

    public function CompanyInformation()
    {
        return $this->hasOne(BuildingCompanyInformation::class, 'customer_id', 'id');
    }
}
