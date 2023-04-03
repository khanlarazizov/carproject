<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $table='cars';
    public $timestamps = false;
    protected $fillable = ['id','car_name'];

//    protected $fillable = [
//        'name', 'detail'
//    ];
}
