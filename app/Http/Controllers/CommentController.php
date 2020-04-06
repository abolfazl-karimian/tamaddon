<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return void
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'FirstName'  => 'required|max:30',
            'LastName'   => 'required|max:30',
            'Body'       => 'required|min:4|max:500',
        ]);
        $Comment = new Comment();
        $Comment->FirstName = $request->FirstName;
        $Comment->LastName  = $request->LastName;
        $Comment->Body      = $request->Body;
        $Comment->save();

//        return back();
//        session()->flash('Message','نظر شما با موفقیت ثبت شد و پس از تایید مدیر سایت نمایش داده خواهد شد.');
        flash('نظر شما با موفقیت ثبت شد و پس از تایید مدیر سایت نمایش داده خواهد شد.','success');
//        dd(session('Message'));
//        return redirect('book#comments');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //        $comments = Comment::latest()->paginate(30);
//        $comments = Comment::where('Authorized',1)->latest()->get();
//        $comments = $comment->AuthorizedComments();
//        return $comments;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
