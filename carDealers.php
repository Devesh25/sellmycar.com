<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\car_dealers;

class carDealers extends Controller
{
    function dealers_list()
    {
    	return car_dealers::all();
    }
}
