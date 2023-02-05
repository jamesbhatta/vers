<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
class BookController extends Controller
{
    public function index()
    {
        $books=Book::orderBy('id','desc')->get();
        return view('books.list',compact('books'));
    }

    public function create(Request $request,Book $book)
    {
        return view('books.form',compact('book'));
    }

    public function store(Request $request)
    {
        Book::create($request->validate([
            'book_type'=>'required',
            'code'=>'required',
            'from'=>'required',
            'to'=>'nullable',
            'province'=>'nullable',
            'district'=>'nullable',
            'municipality'=>'nullable',
            'ward_no'=>'nullable',
            'vdc'=>'nullable',
            'registaar'=>'required',
        ]));

        return redirect()->route('book.index')->with('success','New record added.');
    }

    public function edit(Book $book)
    {
        return view('books.form',compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $book->update($request->validate([
            'book_type'=>'required',
            'code'=>'required',
            'from'=>'required',
            'to'=>'nullable',
            'province'=>'nullable',
            'district'=>'nullable',
            'municipality'=>'nullable',
            'ward_no'=>'nullable',
            'vdc'=>'nullable',
            'registaar'=>'required',
        ]));

        return redirect()->route('book.index')->with('success','Selected book updated succssfully.');
    }

    public function delete(Book $book)
    {
        $book->delete();
        return redirect()->back()->with('success','selected book removed successfully');
    }
}
