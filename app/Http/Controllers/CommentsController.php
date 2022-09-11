<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Traits\HttpResponses;
use function PHPUnit\Framework\isEmpty;

use App\Http\Resources\CommentsResource;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Resources\CommentsAllResource;

class CommentsController extends Controller
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

        if(count($data) === 0) {
            return $this->error('', 'No Records Found', 404);
        } else {
            return CommentsResource::collection(
                Comment::where('user_id', auth()->user()->id)->get()
            );
        }

        
    }

        /**
     * Display latest books resource
     * 
     * @return \Illuminate\Http\Response
     */

    public function newest() {

        $data = Comment::latest('created_at')->simplepaginate(10);

        if(count($data) == 0) {

            return $this->error('', 'No Record Found', 404);

        } else {

            return CommentsAllResource::collection(

                Comment::latest('created_at')->simplepaginate(10)

            );
        }
        
    }


    /**
     * 
     * Display latest books resource
     * 
     * @return \Illuminate\Http\Response
     */

    public function earliest() {

        $data = Comment::oldest('created_at')->simplepaginate(10);

        if(count($data) == 0) {

            return $this->error('', 'No Record Found', 404);

        } else {

            return CommentsAllResource::collection(

                Comment::oldest('created_at')->simplepaginate(10)

            );
        }
    }


    /**
     * Display all books resource
     * 
     * @return \Illuminate\Http\Response
    */

    public function allcomments() {

        $data = Comment::all();

        if(count($data) == 0) {

            return $this->error('', 'No Record Found', 404);

        } else {
            return CommentsAllResource::collection(

                Comment::all()

            );
        }
        
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommentRequest $request)
    {
        $request->validated($request->all());

        $comment = Comment::create([
            'user_id' => auth()->user()->id,
            'book_id' => $request->book_id,
            'ipadd' => $request->ip() ? $request->ip() : "NAN",
            'comment' => $request->comment,
        ]);

        return new CommentsResource($comment);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        return $this->IsNotAuthorized($comment) ? $this->IsNotAuthorized($comment) : new CommentsResource($comment);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        if($this->IsNotAuthorized($comment)) {

            return $this->IsNotAuthorized($comment);
 
         } else {
 
             $comment->update($request->all());
 
             return new CommentsResource($comment);
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        if($this->IsNotAuthorized($comment)) {

            return $this->IsNotAuthorized($comment);

       } else {

           $comment->delete();

           return $this->success('', 'Comment Deleted Successfully', 204);

       }
    }


    
    private function IsNotAuthorized($comment) {

        if(auth()->user()->id !== $comment->user_id) {
            return $this->error('', 'You are not authorized to make this request', 403);
        }

    }
}
