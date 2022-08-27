<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function create(Request $request)
    {
        $request->validate(['name' => 'required', 'address' => 'required', 'phone_number' => 'required', '' => '']);
    }
    public function read()
    {
        return Customer::all();
    }
    public function delete()
    {
    }
    public function edit()
    {
    }
}
