<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Customer;

class CustomerController extends Controller
{

    public function index()
    {
        $customer = Customer::
        join('cars', 'customers.carbrand', '=', 'cars.id')
            ->select('customers.*', 'cars.car_name')->
            get();
        return view('layout.customer.customermenu', compact('customer'));
    }


    public function create()
    {
//        return view('layout.newcustomer4');
        $cars = Car::all();
        // dd($cars);
        return view('layout.customer.createcustomer', compact('cars'));
    }

    public function createPost(Request $request)
    {
        $request->validate([
            'name' => 'required|max:15',
            'surname' => 'required|max:15',
            'birthdate' => 'required',
            'gender' => 'required',
            'carbrand' => 'required',
            'releaseyear' => 'required',
            'color' => 'required|max:10|min:2'
        ]);
        Customer::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'birthdate' => Carbon::parse($request->birthdate)->format('Y-m-d'),
            'gender' => $request->gender,
            'carbrand' => $request->carbrand,
            'releaseyear' => $request->releaseyear,
            'color' => $request->color]);
        return redirect()->route('customers.index');
    }

    public function update($id)
    {
        $customerInfo = Customer::where('id', $id)->first();

        return view('layout.customer.updatecustomer', compact('customerInfo'));
    }

    public function updatePost(Request $request, $id)
    {
        Customer::where('id', $id)->update([
            'name' => $request->name,
            'surname' => $request->surname,
            'birthdate' => Carbon::parse($request->birthdate)->format('Y-m-d'),
            'gender' => $request->gender,
            'carbrand' => $request->car->car_name,
            'releaseyear' => $request->releaseyear,
            'color' => $request->color]);

        return redirect()->route('customers.index');
    }

    public function delete($id)
    {
        DB::table('customers')->where('id', $id)->delete();
        return redirect()->route('customers.index');
    }


}
