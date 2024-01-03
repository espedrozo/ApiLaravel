<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;



class SyncController extends Controller
{
    public function syncDatabases()
    {
        try {
            // Obtenha todos os registros do banco de dados 1
            $customersFromDatabase1 = DB::connection('mysql')->table('customer')->get(array('id', 'first_name', 'last_name', 'sex', 'birth_date'));

            // Sincronize cada customer para o banco de dados 2
            foreach ($customersFromDatabase1 as $client) {
                DB::connection('mysql2')->table('client')->updateOrInsert(['id' => $client->id], (array)$client);
            }

            return response()->json(['message' => 'Database synchronization completed.']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error during database synchronization.', 'message' => $e->getMessage()], 500);
        }
    }
}
