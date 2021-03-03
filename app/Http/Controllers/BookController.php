<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Book;
use Illuminate\Support\Str;
use\Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::paginate(10);
        return view('all_books', [
            'books'=>$books
        ]);
    }

    public function my_books()
    {   
        $user = Auth::user()->email;
        $my_books = Book::where('created_by', $user)->paginate(10);
        return view('my_books', [
            'my_books'=>$my_books
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_book');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $postData = $this->validate($request,[
            "name" => "required | min: 3",
            "content"=>"required | min: 3",
            "description"=>"required",
        ]);
        $response = Book::create([
            'name'=> $postData['name'],
            'content'=>$postData['content'],
            'description'=>$postData['description'],
            'unique_id'=> Str::uuid(),
            'created_by'=>Auth::user()->email
        ]);
        return response()->json($response, 201);
        //return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book_details = Book::find($id);
        return view("view_book", [
            'book_details' => $book_details
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book_details = Book::find($id);
        return view("edit_book", [
            'book_details' => $book_details
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $postData = $this->validate($request,[
            "name" => "required | min: 3",
            "content"=>"required | min: 3",
            "description"=>"required",
        ]); 
        $response = DB::table('books')
        ->where('id', $id)
        ->update([
            "name"=>$postData['name'],
            "content"=>$postData['content'],
            "description"=>$postData['description']
        ]);
        return response()->json($response, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {  
        $response = Book::where('id', $id)->forceDelete();;
        return response()->json($response, 201);
    }

    public function softDestroy($id)
    {  
        $response = Book::where('id', $id)->delete();;
        return response()->json($response, 201);
    }
}
