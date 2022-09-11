<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DonationCenters;
use App\Models\DonationCenterLists;
use Illuminate\Support\Facades\DB;

class GoogleController extends Controller
{
    public function CalculateNearestDonation( Request $request){
        //Getting My Current Location
        $lat = $request->latitude;
        $lon = $request->longitude;
         //Calculation Method
        $nearest_location = DonationCenters::select("donation_centers.name", "donation_centers.id"
                        ,DB::raw("6371 * acos(cos(radians(" . $lat . "))
                        * cos(radians(donation_centers.latitude))
                        * cos(radians(donation_centers.longitude) - radians(" . $lon . "))
                        + sin(radians(" .$lat. "))
                        * sin(radians(donation_centers.latitude))) AS distance"))
                        ->get()->sortBy('distance')->values();
                        //show all Donations Centers
                        $locations = DonationCenters::all();

        return $nearest_location;
    }

    public function index(Request $request)
    {   //show all Donations Centers
        $locations = DonationCenters::all();
        return view('googleAutocomplete', compact('locations'));
    }
}



