<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CertificateResource extends JsonResource
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
            'code' => $this->certificate_code,
            'school' => $this->school->name,
            'course' => $this->course->name,
            'student' => $this->student->name,
            'conclusion_date' => $this->conclusion_date,
            'viwed_times' => $this->viewed
        ];
    }
}
