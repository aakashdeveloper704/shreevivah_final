<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About_us extends Model
{
    use HasFactory;
    protected $table ='aboutus';
    protected $fillable = ['metaname','metavalue','active','status'];

    // public function user()
    // {
    //     return $this->belongsTo("App\Models\aboutus");
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
