<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use Dotenv\Validator;

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
            return response()->json(["message" => "Record not found!"], 404);
        }
        return response()->json($customerById, 200);
    }

    public function postNewCustomer(Request $request){
        // $rules = [
        //     'first_name' => 'required|min:3',
        //     'last_name' => 'required|min:3'
        // ];
        // $validator = Validator::required($request->all(), $rules);
        // if($validator->fails()){
        //     return response()->json($validator->errors(), 400);
        // }        

        $customerNew = Customer::create($request->all());
        return response()->json($customerNew, 201);
    }

    public function putEditCustomer(Request $request, Customer $id){
        $customerEdit = Customer::find($id);
        if(is_null($customerEdit)){
            return response()->json(["message" => "Record not found!"], 404);            
        }
        $id->update($request->all());
        return response()->json($id, 200);
    }

    public function deleteCustomer (Request $request, $id){
        $customerDelete = Customer::find($id);
        if(is_null($customerDelete)){
            return response()->json(["message" => "Record not found!"], 404);            
        }
        $customerDelete->delete($id);
        return response()->json('Record deleted successfully!', 200);
    }
}
