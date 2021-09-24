<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Success_Stories extends Model
{
    use HasFactory;
    protected $table ='success_stories';
    protected $fillable = ['title','description','active','status','image'];


    // public function user()
    // {
    //     return $this->belongsTo("App\Models\Success_Stories");
    // }

    public function createdBy()
    {
        return $this->belongsTo("App\Models\User", "created_by", 'id');
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
