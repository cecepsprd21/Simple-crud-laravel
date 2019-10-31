<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Book;
use PhpParser\Node\Stmt\Echo_;

class BooksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request)
    {   
        if($request->has('search')){
            $books = Book::where('title', 'like', '%' .$request->search. '%' )->get();
        } else {
        $books = Book::all();
        }
        
        return view('books/index',['books' => $books ]);
    }

    public function create()
    {
        return view('books.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'page' => 'required'
        ]);

        Book::create($request->all());
        return redirect('/books')->with('status','Succesfully add book');
    }

   
    public function show($id)
    {
        $book = Book::find($id);
        return view('books/show',compact('book'));
    }

   
    public function edit($id)
    {   
        $book = Book::find($id);
        return view('books.edit', compact('book'));
    }

   
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'page' => 'required'
        ]);

        Book::find($id)->update(request()->all());
        return redirect('/books')->with('status','Succesfully updated book');        
    }
 
    public function destroy(Book $book)
    {
        Book::destroy($book->id);
        return redirect('/books')->with('status','Succesfully deleted book');
    }
}
