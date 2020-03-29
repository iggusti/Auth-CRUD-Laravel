<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Student;

class BooksController extends Controller
{
    public function index()
    {
        
        $books = Book::all();

        //return view('books.index', ['books' => $books]);
        // dump($books);
        return view('books.index', compact('books'));
    }
}
