<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    public static function boot()
    {
        parent::boot();
        self::deleting(function ($m) {
        });
        self::created(function ($m) {
        });
        self::creating(function ($m) {

            $m->district_id = 1;

            if ($m->subcounty_id != null) {
                $sub = Location::find($m->subcounty_id);
                if ($sub != null) {
                    $m->district_id = $sub->parent;
                } else {
                    $m->subcounty_id = 1;
                }
            }

            $m->group_id = 1;
            $sub = Group::find($m->group_id);
            if ($sub != null) {
                $m->association_id = $sub->association_id;
            } else {
                $m->group_id = 1;
            } 
            
            return $m;
        });


        self::updating(function ($m) {

            $m->district_id = 1;
            $sub = Location::find($m->subcounty_id);
            if ($sub != null) {
                $m->district_id = $sub->parent;
            } else {
                $m->subcounty_id = 1;
            } 

            $m->group_id = 1;
            $sub = Group::find($m->group_id);
            if ($sub != null) {
                $m->association_id = $sub->association_id;
            } else {
                $m->group_id = 1;
            } 

            return $m;
        });
    }
}
