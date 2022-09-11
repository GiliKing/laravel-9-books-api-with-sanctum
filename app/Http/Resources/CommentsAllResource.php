<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommentsAllResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        // select the book that is comment on by the user


        return [
            'id' => (string)$this->id,
            'attributes' => [
                'user' => $this->user->name,
                'email' => $this->user->email,
                'ipadd' => $this->ipadd,
                'comment' => $this->comment,
                'commented_at' => $this->created_at,
                'updated_at' => $this->updated_at
            ],
            'relationships' => [
                "book_id" => $this->book->id,
                'title' => $this->book->title,
                'author' => $this->book->author,
                'publication_year' => $this->book->publication_year,
            ],
            
        ];
    }
}
