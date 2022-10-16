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
        'ngayXem',
    ];
    public $timestamps=false;
    public  function  lichchieu(){
        return $this->belongsTo(LichChieu::class,'maLichChieu','id');
    }
    public  function  ghe(){
        return $this->hasMany(Ghe::class,'id');
    }
}
