<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /*
    |--------------------------------------------------------------------------
    | TRAITS
    |--------------------------------------------------------------------------
    */


    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */
    protected $guarded = [];

    protected $hidden = ['password'];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function manager()
    {
        return $this->belongsTo("App\Models\User", "reporting_manager", "id");
    }

    public function leaves()
    {
        return $this->hasMany("App\Models\Leave");
    }

    public function createdLeaves()
    {
        return $this->hasMany("App\Models\Leave", "created_by", "id");
    }

    public function approvedLeaves()
    {
        return $this->hasMany("App\Models\Leave", "approved_by", "id");
    }

    public function createdClients()
    {
        return $this->hasMany("App\Models\Client", "created_by", "id");
    }

    public function createdHolidays()
    {
        return $this->hasMany("App\Models\Holiday", "created_by", "id");
    }

    public function createdBy()
    {
        return $this->belongsTo("App\Models\User", "created_by", "id");
    }

    public function teamMembers()
    {
        return $this->hasMany("App\Models\User", "reporting_manager", "id");
    }

    public function attandance()
    {
        return $this->hasMany("App\Models\Attandance");
    }

    public function salaries()
    {
        return $this->hasMany("App\Models\Salary");
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function scopeExcept($query, $userId)
    {
        return $query->where('id', '!=', $userId);
    }

    public function scopeType($query, $type)
    {
        return $query->whereIn('type', $type);
    }

    public function scopeLower($query, $type)
    {
        if($type == "superadmin")
        {
            return $query->whereIn('type', ["coordinator", "recruiter_manager", "recruiter"]);
        }
        elseif($type == "coordinator")
        {
            return $query->whereIn('type', ["recruiter_manager", "recruiter"]);
        }
        elseif($type == "recruiter_manager")
        {
            return $query->where('type', "recruiter");
        }
    }

    public function scopeJoiningDate($query, $date)
    {
        return $query->whereDate("joining_date", "<=", $date);
    }

    public function scopeJoined($query)
    {
        return $query->where("active", 1);
    }

    public function scopeMonthlyAttandance($query, $month)
    {
        return $this->attandance()->monthwise($month);
    }

    public function scopeMonthlyLeaves($query, $month, $approved = 1)
    {   
        return $this->leaves()->monthwise($month)->approved($approved);
    }
    
    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    // public function getTypeAttribute($value)
    // {
    //     if($value == 'coordinator')
    //     {
    //         return "Coordinator";
    //     }
    //     elseif($value == 'recruiter_manager')
    //     {
    //         return "Recruiter Manager";
    //     }
    //     elseif($value == 'superadmin')
    //     {
    //         return "Superadmin";
    //     }
    //     else
    //     {
    //         return "Recruiter";
    //     }
    // }

    public function getActiveAttribute($value)
    {
        if($value == '1')
        {
            return "Active";
        }
        elseif($value == '0')
        {
            return "Inactive";
        }
        else
        {
            return "Not Logged In";
        }
    }

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
