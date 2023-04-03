<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Customer;

class CustCont extends Controller
{

    public function admin()
    {
        $customer = Customer::get();
        return view('layout.admindemo', compact('customer'));
    }

    public function carmenu()
    {
        $car = Car::get();
        return view('layout.cars', compact('car'));
    }


    public function insertcarPost(Request $request)
    {
        Car::create([
            'car_name' => $request->car_name,
        ]);
        return redirect()->route('carmenu');
    }

    public function updatecar($id)
    {
        $carInfo = Car::where('id', $id)->first();

        return view('layout.cars', compact('carInfo'));
    }

    public function updatecarPost(Request $request, $id)
    {
        Car::where('id', $id)->update([
            'car_name' => $request->car_name]);

        return redirect()->route('updatecarPost');
    }

    public function cardelete($id)
    {
        DB::table('cars')->where('id', $id)->delete();
        return redirect()->route('cardelete');}

    public function admin1()
    {
        return view('layout.newcustomer4');
    }

    public function insertPost(Request $request)
    {
        Customer::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'birthdate' => Carbon::parse($request->birthdate)->format('Y-m-d'),
            'gender' => $request->gender,
            'carbrand' => $request->carbrand,
            'releaseyear' => $request->releaseyear,
            'color' => $request->color]);
        return redirect()->route('admin');
    }

    public function updatecus($id)
    {
        $customerInfo = Customer::where('id', $id)->first();

        return view('layout.updatecustomer3', compact('customerInfo'));
    }

    public function updatecusPost(Request $request, $id)
    {
        Customer::where('id', $id)->update([
            'name' => $request->name,
            'surname' => $request->surname,
            'birthdate' => Carbon::parse($request->birthdate)->format('Y-m-d'),
            'gender' => $request->gender,
            'carbrand' => $request->carbrand,
            'releaseyear' => $request->releaseyear,
            'color' => $request->color]);

        return redirect()->route('admin');
    }

    public function customerdelete($id)
    {
        DB::table('customers')->where('id', $id)->delete();
        return redirect()->route('admin');
    }

    public function car()
    {
        return view('layout.cars');
    }


}
