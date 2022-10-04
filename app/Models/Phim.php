<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phim extends Model
{
    use HasFactory;
    protected $fillable = [
        'tenPhim',
        'moTa',
        'thoiGian',
        'maTheLoai',
    ];
    public $timestamps=false;
}
