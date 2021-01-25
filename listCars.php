<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\oem_specs;

class listCars extends Controller
{
    function getData()
    {
    	return oem_specs::all();
    }
}
