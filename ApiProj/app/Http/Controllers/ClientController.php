<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Client;

class ClientController extends Controller
{
    //
    function getSecondDatabase()
    {
        //return Client::all();
        //return DB::connection('mysql2')->table('client')->get();

        $clients = Client::all();

        return $clients;
    }

    public function getClients()
    {
        return response()->json(Client::get(), 200); 
    }

    public function getClientsById($id) {
        $clientById = Client::find($id);
        if(is_null($clientById)){
            return response()->json(["message" => "Record not found!"], 404);
        }
        return response()->json($clientById, 200);
    }

    public function postNewClient(Request $request){      

        $clientNew = Client::create($request->all());
        return response()->json($clientNew, 201);
    }

    public function putEditClient(Request $request, Client $id){
        $clientEdit = Client::find($id);
        if(is_null($clientEdit)){
            return response()->json(["message" => "Record not found!"], 404);            
        }
        $id->update($request->all());
        return response()->json($id, 200);
    }

    public function deleteClient (Request $request, $id){
        $clientDelete = Client::find($id);
        if(is_null($clientDelete)){
            return response()->json(["message" => "Record not found!"], 404);            
        }
        $clientDelete->delete($id);
        return response()->json('Record deleted successfully!', 200);
    }

}
