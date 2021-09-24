<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Engagement extends Model
{
    use HasFactory;
    protected $table = 'engagement';
    protected $fillable = ['metaname', 'metavalue', 'active', 'status'];
    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */
    public function createdBy()
    {
        return $this->belongsTo("App\Models\User", "created_by", 'id');
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
