<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Books::select('chapters.*', 'books.*')->join('chapters', 'chapters.id_book', 'books.id_book')->get();

        return $this->format_response("200","success",$books);
    }

    public static function format_response($code, $status, $data){
        $data = [
            "code" => $code,
            "status" => $status,
            "data" => $data
        ];
        return $data;
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function show(Request $books)
    {
        dd($books);
        $books = Books::select('chapters.*', 'books.*')->join('chapters', 'chapters.id_book', 'books.id_book')->where('genre',$books->genre)->first();

        return $this->format_response("200","success",$books);
    }

    public function book_by_genre($id){
        $books = Books::select('chapters.*', 'books.*')->join('chapters', 'chapters.id_book', 'books.id_book')->where('genre',$id)->first();
        return $this->format_response("200","success",$books);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function edit(Books $books)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Books $books)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function destroy(Books $books)
    {
        //
    }
}
