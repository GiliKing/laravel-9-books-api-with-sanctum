<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'book_id',
        'ipadd',
        'comment',
    ];

    
    // relationship for user to comment
    public function user() {
        return $this->belongsTo(User::class);
    }

    // relationship for book to comment
    public function book() {
        return $this->belongsTo(Book::class);
    }

}
