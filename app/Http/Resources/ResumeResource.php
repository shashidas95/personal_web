<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ResumeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'          => $this->id,
            'job_title'   => $this->job_title,
            'company'     => $this->company,
            'location'    => $this->location,
            'start_date' => $this->start_date ? Carbon::parse($this->start_date)->format('M Y') : null,
            'end_date'   => $this->end_date ? Carbon::parse($this->end_date)->format('M Y') : 'Present',
            'description' => $this->description,
            'type'        => $this->type,
            'degree'      => $this->degree,
            'field'       => $this->field_of_study,
        ];
    }
}
