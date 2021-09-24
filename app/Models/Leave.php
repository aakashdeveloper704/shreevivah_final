<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leave extends Model
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

    public function user()
    {
        return $this->belongsTo("App\Models\User");
    }

    public function createdBy()
    {
        return $this->belongsTo("App\Models\User", "created_by", 'id');
    }

    public function approvedBy()
    {
        return $this->belongsTo("App\Models\User", "approved_by", "id");
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

    public function scopeApproved($query, $approved = 1)
    {
        return $query->where('approved', $approved);
    }

    public function scopeFreezed($query)
    {
        return $query->where('freeze', 1);
    }

    public function scopeNotFreezed($query)
    {
        return $query->where('freeze', 0);
    }

    public function scopeById($query, $ids = [])
    {
        if(count($ids))
        {
            return $query->whereIn('user_id', $ids);
        }

        return $query->where('user_id', auth()->id());
    }

    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }

    public function scopeMonthwise($query, $month)
    {
        return $query->whereMonth('start_date', $month);
    }
    
    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    public function getApprovedAttribute($value)
    {
        return $value == 1 ? "Yes" : "No";
    }

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
