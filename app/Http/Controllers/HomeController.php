<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth()->user()->email;
        $get_my_books = Book::where('created_by', $user)->get();
        $no_of_my_book = count($get_my_books);
        $get_all_books = Book::all();
        $no_of_all_books = count($get_all_books);
        $get_archived_books = Book::onlyTrashed()->get();
        $no_archived_books = count($get_archived_books);
        return view('home', [
            "no_of_my_book" => $no_of_my_book,
            "no_of_all_books" => $no_of_all_books,
            "no_archived_books" => $no_archived_books
        ]);
    }
}
