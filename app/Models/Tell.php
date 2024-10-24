<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tell extends Model
{
    use HasFactory;

    protected $table = 'tells';

    protected $fillable = ['name', 'surname', 'phone', 'image', 'user_id'];
}
