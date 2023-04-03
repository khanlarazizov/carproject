<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Project1 extends Controller




//    public function index()
//    {
//        $new_customer = DB::table('new_customers')->get();
//        return view('layout.homepage')->with('new_customers',$new_customer);
//
//        return view('layout.homepage', compact('new_customer'));
//    }
//
//    public function insert()
//    {
//        return view('layout.newcustomer');
//    }
//
//    public function insertPost(Request $request)
//    {
//        DB::table('new_customers')->insert(
//            [
//                'name' => $request->name,
//                'surname' => $request->surname,
//                'birthdate' => Carbon::parse($request->birthdate)->format('Y-m-d'),
//                'gender' => $request->gender,
//                'carbrand' => $request->carbrand,
//                'releaseyear' => $request->releaseyear,
//                'color' => $request->color
//            ]
//        );
//        return redirect()->route('index');
//    }
//
//    public function updatecus($id)
//    {
//        return $id;
//        $redakte=DB::table('new_customers')->whereID($id)->first();
//
//       return view('layout.updatecustomer',compact('redakte'));
//
//        return view('layout.updatecustomer');
//    }
//
//    public function customerdelete($id){
//        DB::table('new_customers')->where('id',$id)->Delete();
//    }
//
//
{}

