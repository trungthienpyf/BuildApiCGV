<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CT_LC extends Model
{
    use HasFactory;
    protected $fillable = [
        'maPhim',
        'maLichChieu',

    ];
    public $timestamps=false;
}
