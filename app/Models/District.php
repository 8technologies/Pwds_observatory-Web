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

    /**
     * Has many service- providers
     */
    public function service_providers()
    {
        return $this->belongsToMany(ServiceProvider::class);
    }

    /**
     * Has many products
     */
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
