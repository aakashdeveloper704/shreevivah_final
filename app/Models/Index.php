<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Index extends Model
{
    use HasFactory;
    protected $table = "register";
    // public $timestamps = true;

    protected $fillable = [
		    'gender', 
        'marital_status',
        'grom_bride', 
        'fullname',
        'email',
        'mobile',
        'religion',
        'caste',
        'image',
	];
}
