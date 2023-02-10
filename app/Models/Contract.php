<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function get_customer()
    {
        return $this->hasOne(CustomerInfo::class, 'id', 'customer_id')->with('BuildingInformation');
    }
}
