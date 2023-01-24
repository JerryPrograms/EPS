<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainPartModel extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function SubParts()
    {
        return $this->hasMany(\App\Models\KeyAccessoryInformation::class,'main_part_id','id');
    }
}
