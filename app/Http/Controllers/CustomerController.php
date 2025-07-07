<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    function index()  {
        return view('master.customer');
    }

    function store(Request $request)  {
        $request->validate([
            'name'=>'required',
            'phone_number'=>'required',
            'email'=>'email',
            'address'=>'address'
        ]);

        $customer = Customer::create([
            'name'=> $request->name,
            'email'=>$request->email,
            'phone_number'=>$request->phone_number,
            'address'=>$request->address
        ]);

        return redirect()->route('master.customer')->with('success', 'Customer created successfully');
    }
}
