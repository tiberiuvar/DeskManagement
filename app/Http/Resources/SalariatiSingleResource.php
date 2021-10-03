<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SalariatiSingleResource extends JsonResource
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
            'id'                    => $this->id,
            'Nume'                  => $this->Nume,
            'Prenume'               => $this->Prenume,
            'Email'                 => $this->Email,
            'Data_de_nastere'       => $this->Data_de_nastere,
            'departamentes_id'      => $this->departamentes_id,
            'birouris_id'           => $this->birouris_id,
            'Manager'               => $this->Manager
         
        ];
    }
}
