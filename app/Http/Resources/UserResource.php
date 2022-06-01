<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'firstname' => $this->first_name,
            'lastname' => $this->last_name,
            'father' => [
                'firstname' => $this->father_first_name
            ],
            'tellnum' => $this->mobile ?? null,
            'email' => $this->email,
        ];
    }
}
