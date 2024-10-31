<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ctg;

class Pst extends Model
{
    use HasFactory;

    protected $table = 'psts';

    public function ctg()
    {
        return $this->belongsTo(Ctg::class, 'name');
    }
}
