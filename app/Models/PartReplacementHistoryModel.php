<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartReplacementHistoryModel extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function GetMainPart()
    {
        return $this->hasOne(MainPartModel::class,'id','part');
    }
    public function GetSubPart()
    {
        return $this->hasOne(KeyAccessoryInformation::class,'id','sub_part');
    }

}
