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
    public function ves(){
        return $this->hasMany(Ve::class,'maGhe','id');
    }
    public function  phong(){
        return $this->belongsTo(Phong::class,'maPhong','id');
    }
}
