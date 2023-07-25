<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\BuildingAddress;

class CustomerInfo extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $guarded = [];

    protected $hidden = [
        'customer_number',
        'master_id',
        'password',
        'company_name',
        'company_registration_number',
        'representative',
        'maintenance_business_registration_number',
        'address',
        'business_email',
        'sectors',
        'contact',
        'fax',
        'email',
        'division',
        'show_password',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function BuildingInformation()
    {
        return $this->hasOne(BuildingInformation::class, 'customer_id', 'id');
    }

    public static function GetBuildingInformation($building_id){
        if(!empty($building_id)){
            $building_id = json_decode($building_id);
            $buildingAddress = BuildingAddress::where('id', $building_id[0])->first();
            return $buildingAddress;
        }else{
            return null;
        }
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

    public function MainAccessory()
    {
        return $this->hasMany(MainPartModel::class, 'customer_id', 'id');
    }

    public function KeyAccessory()
    {
        return $this->hasMany(KeyAccessoryInformation::class, 'customer_id', 'id');
    }

    public function PartReplacementHistory()
    {
        return $this->hasMany(PartReplacementHistoryModel::class, 'customer_id', 'id');
    }

    public function MonthlyRegularInspection()
    {
        return $this->hasMany(MonthlyRegularInspection::class, 'customer_id', 'id');
    }

    public function EmergencyDispatchCheckList()
    {
        return $this->hasMany(EmergencyDispatchCheckList::class, 'customer_id', 'id');
    }

    public function ManageAttachments()
    {
        return $this->hasMany(ManageAttachment::class, 'customer_id', 'id');
    }

    public function DispatchInformation()
    {
        return $this->hasMany(DispatchInformationData::class, 'customer_id', 'id');
    }

    public function GetQuote()
    {
        return $this->hasMany(Quotation::class, 'customer_id', 'id');
    }

    public function getInitialDate()
    {
        return $this->hasOne(PartsInitialDate::class, 'customer_id', 'id');
    }

    public function GetBuildingInfo()
    {
        if(!empty($this->building_id))
        {
            return BuildingAddress::query()->whereIn('id',json_decode($this->building_id))->get();
        }
        return BuildingAddress::query()->where('id',0)->get();

//        return $this->hasOne(BuildingAddress::class, 'id', 'building_id');
    }


    public function EngineerCompany()
    {
        return $this->hasOne(Engineer_company::class, 'id', 'added_by_id');
    }
}
