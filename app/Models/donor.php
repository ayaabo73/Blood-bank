<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donor extends Model
{
    use HasFactory;
    protected $fillable=['name','age','type', 'blood_type','phone','email','location','date','amount','points']; 
}
