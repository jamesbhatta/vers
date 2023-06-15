<?php

namespace App\View\Components;

use App\Book;
use Illuminate\View\Component;

class BookSelect extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $books;
    public $bookType;
    public function __construct($bookType)
    {
        $this->bookType = $bookType;
        $this->books = Book::Where('book_type', $bookType)->orderBy('code','desc')->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.book-select');
    }
}
