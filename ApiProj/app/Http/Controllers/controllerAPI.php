<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerAPI extends Controller

{
    function getData()
    {
        return["name"=>"Emanuel"];
    }
}