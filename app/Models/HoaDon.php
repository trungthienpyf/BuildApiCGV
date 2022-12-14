<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoaDon extends Model
{
    use HasFactory;
    protected $fillable = [
        'ngayTao',
        'thanhTien',
        'maKhachHang',

    ];
    public $timestamps=false;
    public  function ves(){
        return $this->hasMany(Ve::class,'maHoaDon','id');
    }
}
