<?php

namespace App\Http\Controllers;

use App\Http\Resources\LocationResource;
use App\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        return LocationResource::collection(Location::all());
    }
}
