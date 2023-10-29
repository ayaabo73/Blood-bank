<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class amount extends Model
{
    use HasFactory;
    protected $fillable=['A','B','O', 'AB','Aa','Bb','Oo','ABb']; 
}
