<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phong extends Model
{
    use HasFactory;
    protected $fillable = [
        'tenAdmin',
        'taiKhoan',
        'matKhau',
        'chucVu',
    ];
    public $timestamps=false;
}
