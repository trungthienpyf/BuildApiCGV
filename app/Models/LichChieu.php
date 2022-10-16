<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LichChieu extends Model
{
    use HasFactory;
    protected $fillable = [
        'gioBatDau',
        'gioKetThuc',
        'ngayChieu',
        'maPhong',
        'ngayKetThuc',
    ];
    public $timestamps=false;
    public function  ves(){
        return $this->hasMany(Ve::class,'maLichChieu','id');
    }
    public function phong(){
        return $this->belongsTo(Phong::class,'maPhong','id');
    }
    public function phims(){

        return $this->belongsToMany(Phim::class, 'c_t__l_c_s', 'maLichChieu', 'maPhim');

    }
}
