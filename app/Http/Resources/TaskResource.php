<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'task_id' => $this->id,
            'name' => $this->TaskName,
            'task' => $this->Task,
            'isCompleted' => $this->isCompleted === 1 ? 'Done' : 'Pending',
            'Created' => $this->created_at->diffForHumans(),
            'Updated' => $this->updated_at->diffForHumans(),
        ];
    }
}
