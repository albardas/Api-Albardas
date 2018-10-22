<?php

namespace App\Http\Resources\Agroquimico;

use Illuminate\Http\Resources\Json\JsonResource;

class AgroquimicoResource extends JsonResource
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
            'name' => $this->nombre,
            'fullType' => ucwords(strtolower($this->marca.', '.$this->familia)),
            'marca' => $this->marca,
            'familia' => $this->familia,
            'd/h' => $this->dh,
            'unidad' => $this->unidad,
            'docis_por_hectarea' => $this->dh.$this->unidad,
            'sk' => $this->stock


        ];
    }
}
