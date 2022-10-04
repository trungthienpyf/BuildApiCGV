<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    use HasFactory;
    protected $fillable = [
        'tenKhachHang',
        'sdt',
        'email',
        'matKhau',
        'DiaChi',
    ];
    public $timestamps=false;
}
