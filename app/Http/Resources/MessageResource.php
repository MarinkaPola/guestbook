<?php

namespace App\Http\Resources;
use App\Models\Message;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class MessageResource
 * @package App\Http\Resources
 * @mixin Message
 */
class MessageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'first_name' => $this->first_name,
            'email' => $this->email,
            'message' => $this->message,

        ];
    }
}
