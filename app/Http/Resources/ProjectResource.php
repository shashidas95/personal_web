<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'status' => $this->status,
            'start_date' => $this->start_date ? Carbon::parse($this->start_date)->format('Y') : null,
            'end_date' => $this->end_date ? Carbon::parse($this->end_date)->format('Y') : 'Present',
            'image'     => $this->image_path ? url('storage/' . $this->image_path) : null,
        ];
    }
}
