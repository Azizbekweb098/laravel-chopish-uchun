<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Malumot extends Model
{
    use HasFactory;
    protected $table = 'malumots';

    protected $fillable = ['new'];
    
}
