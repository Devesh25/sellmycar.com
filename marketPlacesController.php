<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\marketplaces_inventory;

class marketPlacesController extends Controller
{
    function marketPlaceView()
    {
    	return marketplaces_inventory::all();
    }
}
