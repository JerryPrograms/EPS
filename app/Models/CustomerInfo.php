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

    public function ASInformation()
    {
        return $this->hasOne(ASInformation::class, 'customer_id', 'id');
    }

    public function RepairCompanyInformation()
    {
        return $this->hasOne(RepairCompanyInformation::class, 'customer_id', 'id');
    }

    public function ParkingFacilityCertificate()
    {
        return $this->hasOne(ParkingFacilityCertificate::class, 'customer_id', 'id');
    }

    public function InspectionCertificate()
    {
        return $this->hasMany(InspectionCertificate::class, 'customer_id', 'id');
    }
}