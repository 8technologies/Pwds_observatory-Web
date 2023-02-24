<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Group extends Model
{
    use HasFactory;

    public static function get_groups_array()
    {
        $subs = [];
        foreach (Group::get_groups() as $key => $value) {

            $subs[$value->id] = ((string)($value->name)) .", " . ((string)($value->group_name));
        }
        return $subs;
    }

    public function district()
    {
        return $this->belongsTo(Location::class, 'parent');
    }
    public static function get_groups()
    {
        $sql = "SELECT groups.id as id, associations.name as name, groups.name as group_name FROM  `groups`, `associations` WHERE  associations.id = groups.association_id ORDER BY associations.name ASC";
        return DB::select($sql);
    }
 
    public static function get_districts()
    {
        return Location::where(
            'parent',
            '<',
            1
        )->get();
    }


    public static function boot()
    {
        parent::boot();
        self::deleting(function ($m) {
            die("You can't delete this item.");
        });
    }

    public function getNameTextAttribute()
    {


        return "$this->name - $this->district_name";
        if ($this->district == null) {
            return $this->name;
        }
        return $this->name . ", " . $this->district;

        if (((int)($this->parent)) > 0) {
            $mother = Location::find($this->parent);

            if ($mother != null) {
                return $mother->name . ", " . $this->name;
            }
        }
        return $this->name;
    }

    protected $appends = ['name_text'];
}
 