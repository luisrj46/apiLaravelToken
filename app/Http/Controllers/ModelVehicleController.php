<?php

namespace App\Http\Controllers;

use App\Http\Resources\ModelVehicleResource;
use App\ModelVehicle;
use Illuminate\Http\Request;

class ModelVehicleController extends Controller
{
    public function index(Request $request)
    {
        return ModelVehicleResource::collection(ModelVehicle::all());
    }
}
