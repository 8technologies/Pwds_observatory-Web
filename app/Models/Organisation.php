<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    use HasFactory;

    public function districtsOfOperation()
    {
        return $this->belongsToMany(District::class)->withTimestamps();
    }

    /**
     * Programs or initiatives run by this organisation
     */
    public function programs()
    {
        return $this->hasMany(Program::class);
    }

    public function leaderships()
    {
        return $this->hasMany(Leadership::class);
    }

    public function parentOrganisation()
    {
        return $this->belongsToMany(Organisation::class);
    }

    public function childOrganisations()
    {
        return $this->belongsToMany(Organisation::class);
    }

    public function member_pwds()
    {
        return $this->belongsToMany(Person::class, 'organisation_person', 'organisation_id', 'person_id')->withTimestamps();
    }

}
