<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Traits\HttpResponses;
use App\Http\Resources\BooksResource;
use App\Http\Resources\BooksAllResource;

use function PHPUnit\Framework\isEmpty;

class BooksController extends Controller
{

    use HttpResponses;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Comment::where('user_id', auth()->user()->id)->get();

        if(count($data) == 0) {
            return $this->error('', 'No Records Found', 404);
        } else {
            return BooksResource::collection(
                Comment::where('user_id', auth()->user()->id)->paginate(10)
            );
        }

        
    }

    
    /**
     * Display latest books resource
     * 
     * @return \Illuminate\Http\Response
     */

    public function newest() {

        $data = Book::latest('publication_year')->simplepaginate(20);

        if(count($data) == 0) {

            return $this->error('', 'No Record Found', 404);

        } else {

            return BooksAllResource::collection(
                Book::latest('publication_year')->simplepaginate(20)
            );
        }
        
    }


    /**
     * Display latest books resource
     * 
     * @return \Illuminate\Http\Response
     */

    public function earliest() {

        $data = Book::oldest('publication_year')->simplepaginate(20);

        if(count($data) == 0) {

             return $this->error('', 'No Record Found', 404);

        } else {

            return BooksAllResource::collection(

                Book::oldest('publication_year')->simplepaginate(20)

            );
        }
    }

    /**
     * Display all books resource
     * 
     * @return \Illuminate\Http\Response
     */

    public function allbooks() {

        $data = Book::all();

        if(count($data) == 0) {
            return $this->error('', 'No Record Found', 404);
        } else {
            return BooksAllResource::collection(
                Book::latest()->simplepaginate(20)
            );
        }
        
    }

}
