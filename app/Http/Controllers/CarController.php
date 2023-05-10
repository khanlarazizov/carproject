<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    public function car()
    {
        return view('layout.car.cars');
    }
    public function carmenu()
    {
        $car = Car::get();
        return view('layout.car.cars', compact('car'));
    }


    public function createPost(Request $request)
    {
        Car::create([
            'car_name' => $request->car_name,
        ]);
        return redirect()->route('carmenu');
    }

    public function update($id)
    {
        $carInfo = Car::where('id', $id)->first();

        return view('layout.car.cars', compact('carInfo'));
    }

    public function updatePost(Request $request, $id)
    {
        Car::where('id', $id)->update([
            'car_name' => $request->car_name]);

        return redirect()->route('cars.updatePost');
    }

    public function delete($id)
    {
        DB::table('cars')->where('id', $id)->delete();
        return redirect()->route('cars.delete');
    }
}
