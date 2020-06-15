<?php

namespace App\Http\Controllers;

use App\Book;
use App\Comment;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

//use Verta;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }


    /**
     * @param Book $book
     *
     * @return Application|Factory|View
     */
    public function show(Book $book)
    {

        $comments = Comment::authorizedComments();
//        d($comments[0]->Body);
//        return verta($comments[0]->created_at); // 1395-12-09 15:05:56
//        return verta();

        $book = $book->latest()->first();
        return view('user.book.index',compact('book','comments'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Book $book
     *
     * @return Response
     */
    public function edit(Book $book)
    {
        //
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request  $request
     * @param Book $book
     *
     * @return Response
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Book  $book
     *
     * @return Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
