<?php

namespace App\Http\Resources;

use App\Cities;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class CountryApi extends JsonResource
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
            "Name" => $this->name,
            "Flag" =>  url(Storage::url('Flag/'. $this->flag)),
            "Cities" => CityApi::collection(Cities::where("country_id",$this->id)->whereNull('deleted_at')->get()),
            "Available" => $this->is_active,
            "KeyCode" => $this->code,
        ];
    }
}
