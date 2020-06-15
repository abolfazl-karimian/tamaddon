<?php

namespace App\Http\Controllers\Admin;

use App\Comment;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class CommentController extends Controller {


    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $admin = User::first();
        $unConfirmedComments = Comment::where( 'authorized', '1' )->paginate( 10 );

        return view( 'admin.comment.index', get_defined_vars() );

    }

    //un-confirmed comments
    public function unConfirmedComments()
    {
        $admin = User::first();
        $unConfirmedComments = Comment::where( 'authorized', '0' )->paginate( 10 );

        return view( 'admin.comment.un-confirmed', get_defined_vars() );


    }

    //confirm comment
    public function confirmComment($id)
    {
        $comment = Comment::find( $id );
        $comment->authorized = 1;
        $comment->save();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return void
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return void
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return void
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     *
     * @return void
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return void
     */
    public function destroy($id)
    {
        $comment = Comment::findOrFail( $id );
        $comment->delete();
    }

}
