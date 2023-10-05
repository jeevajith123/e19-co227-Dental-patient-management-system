<?php

namespace App\Models\Patient;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class PatientBasic extends Model
{
    use HasFactory;

    protected $fillable = [
        'reg_number',
        'name',
        'dob',
        'initial_visit',
        'gender',
        'ethnicity',
        'honorific',
        'district',
        'contact_address',
        'contact_tele',
        'guardian_name',
        'guardian_tele',
        'guardian_address',
        'guardian_relationship',
        'presenting_complain_co',
        'presenting_complain_ho',
        'medical_history',
        'current_medications',
        'special_referrals',
        'entered_by',
    ];

    public const GENDERS = [
        'male'=>'Male',
        'female'=>'Female',
        'other'=>'Other',
    ];

    public const ETHNICITIES = [
        'sinhala'=>'Sinhala',
        'tamil'=>'Tamil',
        'muslim'=>'Muslim',
        'burgher'=>'Burgher',
        'malay'=>'Malay',
    ];

    public const HONORIFICS = [
            'mr.'=>'Mr.',
            'miss.'=>'Miss.',
            'mrs.'=>'Mrs.',
            'ms.'=>'Ms.',
    ];

    public const DISTRICTS = [
            'colombo'=>'Colombo',
            'gampaha'=>'Gampaha',
            'kalutara'=>'Kalutara',
            'kandy'=>'Kandy',
            'nuwara eliya'=>'Nuwara Eliya',
            'galle'=>'Galle',
            'matara'=>'Matara',
            'hambantota'=>'hambantota',
            'jaffna'=>'Jaffna',
            'kilinochchi'=>'Kilinochchi',
            'mannar'=>'Mannar',
            'vavuniya'=>'Vavuniya',
            'mulativu'=>'Mulativu',
            'batticaloa'=>'Batticaloa',
            'ampara'=>'Ampara',
            'trincomalee'=>'Trincomalee',
            'kurunegala'=>'Kurunegala',
            'puttalam'=>'Puttalam',
            'anuradhapura'=>'Anuradhapura',
            'polonnaruwa'=>'Polonnaruwa',
            'badulla'=>'Badulla',
            'monaragala'=>'Monaragala',
            'matale'=>'Matale',
            'ratnapura'=>'Ratnapura',
            'kegalle'=>'Kegalle',
    ];

    public const GUARDIAN_RELATIONSHIPS = [
        'mother' => 'Mother',
        'father' => 'Father',
        'foster' => 'Foster Parent',
        'relative' => 'Family Relative',
    ];

    public const ENTERED_BYS = [
            'doctor'=>'Doctor',
            'medicle student'=>'Medicle Student',
            'patient'=>'Patient',
            'other'=>'Other',
    ];

    //pasan made
    protected $dates=[
        'dob',
        'initial_visit',
    ];
    //

    public function habits()
    {
        return $this->hasOne(PatientHabits::class, 'patient_id');
    }

    public function oral_hygiene()
    {
        return $this->hasOne(PatientHygiene::class, 'patient_id');
    }

    public function getAge()
    {
        // TODO: implement 
    }

    //pasan made
    public static function genders()
    {
        return [
            'male'=>'Male',
            'female'=>'Female',
            'other'=>'Other',
        ];
    }  

    public static function ethnicities()
    {
        return[
            'sinhala'=>'Sinhala',
            'tamil'=>'Tamil',
            'muslim'=>'Muslim',
            'burgher'=>'Burgher',
            'malay'=>'Malay',
        ];
    }

    public static function honorifics()
    {
        return[
            'mr.'=>'Mr.',
            'miss.'=>'Miss.',
            'mrs.'=>'Mrs.',
            'ms.'=>'Ms.',
        ];
    }

    public static function districts()
    {
        return[
            'colombo'=>'Colombo',
            'gampaha'=>'Gampaha',
            'kalutara'=>'Kalutara',
            'kandy'=>'Kandy',
            'nuwara eliya'=>'Nuwara Eliya',
            'galle'=>'Galle',
            'matara'=>'Matara',
            'hambantota'=>'hambantota',
            'jaffna'=>'Jaffna',
            'kilinochchi'=>'Kilinochchi',
            'mannar'=>'Mannar',
            'vavuniya'=>'Vavuniya',
            'mulativu'=>'Mulativu',
            'batticaloa'=>'Batticaloa',
            'ampara'=>'Ampara',
            'trincomalee'=>'Trincomalee',
            'kurunegala'=>'Kurunegala',
            'puttalam'=>'Puttalam',
            'anuradhapura'=>'Anuradhapura',
            'polonnaruwa'=>'Polonnaruwa',
            'badulla'=>'Badulla',
            'monaragala'=>'Monaragala',
            'matale'=>'Matale',
            'ratnapura'=>'Ratnapura',
            'kegalle'=>'Kegalle',
        ];
    }

    public static function guardian_relationships()
    {
        return[
            'mother' => 'Mother',
            'father' => 'Father',
            'foster' => 'Foster Parent',
            'relative' => 'Family Relative',
        ];
    }

    public static function entered_bys()
    {
        return[
            'doctor'=>'Doctor',
            'medicle student'=>'Medicle Student',
            'patient'=>'Patient',
            'other'=>'Other',
        ];
    }
}