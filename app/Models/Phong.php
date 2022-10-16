<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phong extends Model
{
    use HasFactory;
    protected $fillable = [
        'tenPhong',

    ];
    public $timestamps=false;
    public  function lichchieus(){
        return $this->hasMany(LichChieu::class,'maPhong','id');
    }
}
