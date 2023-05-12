<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;


    /**
     *  Has many organisations operations
     */
    public function organisations()
    {
        return $this->belongsToMany(Organisation::class)->withTimestamps();
    }

    /**
     *  Has many people
     */
    public function people()
    {
        return $this->hasMany(Person::class);
    }
}