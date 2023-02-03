<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function GetQuoteContent()
    {
        return $this->hasMany(QuotationContent::class, 'quotation_id', 'id');
    }
    public function GetCustomer()
    {
        return $this->hasOne(CustomerInfo::class,'id','customer_id');
    }
}
