<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ghe extends Model
{
    use HasFactory;
    protected $fillable = [
        'loaiGhe',
        'maPhong',
    ];
    public $timestamps=false;
}
