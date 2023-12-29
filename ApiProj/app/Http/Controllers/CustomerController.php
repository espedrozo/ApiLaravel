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
        $customerById = Customer::find($id);
        if(is_null($customerById)){
            return response()->json('Record not found!', 404);
        }
        return response()->json($customerById, 200);
    }

    public function postNewCustomer(Request $request){
        $customerNew = Customer::create($request->all());
        return response()->json($customerNew, 201);
    }

    public function putEditCustomer(Request $request, Customer $id){
        $customerEdit = Customer::find($id);
        if(is_null($customerEdit)){
            return response()->json('Record not found!', 404);            
        }
        $id->update($request->all());
        return response()->json($id, 200);
    }

    public function deleteCustomer (Request $request, Customer $id){
        $customerDelete = Customer::find($id);
        if(is_null($customerDelete)){
            return response()->json('Record not found!', 404);            
        }
        $id->delete($id);
        return response()->json(null, 204);
    }
}
