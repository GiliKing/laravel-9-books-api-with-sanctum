<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Comment;

class BooksResource extends JsonResource
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
                'book_title' => $this->book->title,
                'author' => $this->book->author,
                'publication_year' => $this->book->publication_year,
                'created_at' => $this->book->created_at,
                'updated_at' => $this->book->updated_at
            ],
            'relationships' => [
                'user' => $this->user->name,
                'email' => $this->user->email,
                'ipadd' => $this->ipadd,
                'comment' => $this->comment
            ],
            
        ];
    }
}
