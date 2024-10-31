<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Pst;

class Ctg extends Model
{
    use HasFactory;

    protected $table = 'ctgs';

    public function posts()
    {
        return $this->hasMany(Pst::class);
    }
}
