<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ve extends Model
{
    use HasFactory;
    protected $fillable = [
        'ngayTao',
        'trangThai',
        'giaVe',
        'maLichChieu',
        'maHoaDon',
        'maGhe',
    ];
    public $timestamps=false;
}
