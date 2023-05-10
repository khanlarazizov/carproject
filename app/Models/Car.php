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
    public function Customer(){
        return $this->hasMany(Customer::class, 'carbrand','id');
    }
}
