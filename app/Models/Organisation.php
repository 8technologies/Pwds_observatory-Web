<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    use HasFactory;

    public function setAttachmentsAttribute($value)
    {
        $this->attributes['attachments'] = json_encode($value);
    }

    public function getAttachmentsAttribute($value)
    {
        return json_decode($value);
    }

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
        return $this->hasMany(Membership::class, 'child_organisation_id');
    }

    public function childOrganisations()
    {
        return $this->hasMany(Membership::class, 'parent_organisation_id');
    }

    public function member_pwds()
    {
        return $this->hasMany(Person::class)->pivot('position', 'Year_of_membership');
    }

    public function contact_persons()
    {
        return $this->hasMany(OrganisationContactPerson::class);
    }

    public function memberships()
    {
        return $this->hasMany(Organisation::class);
    }

    public function administrator() {
        return $this->belongsTo(Person::class, 'user_id');
    }

}
