<?php

namespace App\Http\Controllers;
use App\Models\Books;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['title']= Books::all();
        return view('User.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Books = new Books();
        $Books->title = $request['title'];
        $Books->author = $request['author'];
        $Books->description = $request['description'];
        $Books->published_year = $request['published_year'];
        $Books->isbn = $request['isbn'];
        $Books->save();

        return redirect()->to('Books');



    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Books = Books::find();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Books::find($id);
        $book->delete();
        return redirect()->to('Books');
    }
}
