<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Comment;

class BooksAllResource extends JsonResource
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

        $data = Comment::where('book_id', $this->id)->get();

        $comment_count = count($data);


        return [
            'id' => (string)$this->id,
            'attributes' => [
                'book_title' => $this->title,
                'author' => $this->author,
                'publication_year' => $this->publication_year,
                'uploaded_at' => $this->created_at,
                'updated_at' => $this->updated_at
            ],
            'relationships' => [
                'comment_count' => $comment_count,
            ],
            
        ];
    }
}
