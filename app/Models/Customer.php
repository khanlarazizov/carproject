<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table='customers';
    protected $fillable = ['id','name', 'surname', 'birthdate', 'gender', 'carbrand', 'releaseyear', 'color'];

    public function Car(){
        return $this->hasOne(Car::class, 'id','carbrand');
    }
}
