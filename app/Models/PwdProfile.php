<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class PwdProfile extends Model
{
    use HasUuids, HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'dob',
        'gender',
        'education_level',
        'employment_type',
        'disability_type',
        'nok',
        'nok_relationship',
        'nok_contact',
        'has_care_giver',
        'care_giver_name',
        'care_giver_contact',
        'care_giver_relationship',
        'care_giver_dob',
        'district_organisation'
    ]; 
    
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'dob' => 'datetime',
        'care_giver_dob' => 'datetime',
    ]; 
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
