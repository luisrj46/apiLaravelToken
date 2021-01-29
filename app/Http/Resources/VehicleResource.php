<?php

namespace App\Http\Resources;

use App\ModelVehicle;
use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class VehicleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'model'=>new ModelVehicleResource($this->model_vehicle),
            'location'=>new LocationResource( $this->location),
            'tipo'=>new VehicleResource($this->type_vehicle),
            'current_kilometer'=>$this->current_kilometer,
            'engine_size'=>$this->engine_size,
            'fuel_type'=>$this->fuel_type,
            'created_at'=>Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)->format('d-m-Y')

        ];
    }
}
