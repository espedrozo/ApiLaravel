<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function getCustomers()
    {
        return response()->json(Customer::get(), 200);
    }

    public function getCustomersById($id) {
        return response()->json(Customer::find($id), 200);
    }
}
