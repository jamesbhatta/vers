<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Http\Requests\BookRequest;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::orderBy('id', 'desc')->get();
        return view('books.list', compact('books'));
    }

    public function create(Request $request, Book $book)
    {
        return view('books.form', compact('book'));
    }

    public function store(BookRequest $request, Book $book)
    {
       $book = Book::create($request->validated());
        $book->save();
        return redirect()->route('book.index')->with('success', 'New record added.');
    }

    public function edit(Book $book)
    {
        return view('books.form', compact('book'));
    }

    public function update(BookRequest $request, Book $book)
    {
        $book->update($request->validated());
        $book->save();
        return redirect()->route('book.index')->with('success', 'Selected book updated succssfully.');
    }

    public function delete(Book $book)
    {
        $book->delete();
        return redirect()->back()->with('success', 'selected book removed successfully');
    }
}