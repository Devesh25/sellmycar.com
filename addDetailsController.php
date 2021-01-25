<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\marketplaces_inventory;

class addDetailsController extends Controller
{
    function addDetails(Request $req)
    {
    	$marketplaces_inventory = new marketplaces_inventory;
    	$marketplaces_inventory->model_name=$req->model_name;
    	$marketplaces_inventory->model_year=$req->model_year;
    	$marketplaces_inventory->km_on_odometer=$req->km_on_odometer;
    	$marketplaces_inventory->major_scrathes=$req->major_scrathes;
    	$marketplaces_inventory->original_paint=$req->original_paint;
    	$marketplaces_inventory->number_of_accidents=$req->number_of_accidents;
    	$marketplaces_inventory->number_of_previous_buyers=$req->number_of_previous_buyers;
    	$marketplaces_inventory->registration_place=$req->registration_place;
    	
    	$result = $marketplaces_inventory->save();


    	if ($result) {
    		return ["result"=>"Data Has been Saved ....."];
    	
    	}

    	else

    	{
    		return ["result"=>"Data not Saved ....."];

    	}

    	
    }
}
