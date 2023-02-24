<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory; 

    public function campus()
    {
        return $this->belongsTo(Campus::class, 'campus_id');
    }
 
    public function programs()
    {
        return $this->hasMany(UserHasProgram::class, 'user_id');
    }
 
}
