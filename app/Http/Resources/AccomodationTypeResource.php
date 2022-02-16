<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AccomodationTypeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id'               =>$this->id,
            'category_name'    =>$this->category_name,
            'property_size'  =>$this->property_size,
            'bedroom'        =>$this->bedroom,
            'bathroom'       =>$this->bathroom,
            'garage'         =>$this->garage,
            'location'       =>$this->location,
            'description'    =>$this->description,
            'price'          =>$this->price,
            'photo'          =>asset('property_photos/' . $this->photo)
           ];
    }
}
