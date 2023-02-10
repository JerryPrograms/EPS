<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonthlyRegularInspection extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = ['arrival_time'=>'datetime','completion_time'=>'datetime','inspection_date'=>'datetime'];
}
