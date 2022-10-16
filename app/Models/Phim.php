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
        'img',
    ];

    public function lichChieus(){

        return $this->belongsToMany(LichChieu::class, 'c_t__l_c_s', 'maPhim', 'maLichChieu');

    }
    public $timestamps=false;
}
