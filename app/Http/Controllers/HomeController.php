<?php

namespace App\Http\Controllers;

use App\Birth;
use App\Book;
use App\Death;
use App\Marriage;
use App\MigrationCertificate;

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

    public function index()
    {
        $birth = Birth::count();
        $death = Death::count();
        $marriage = Marriage::count();
        $migrationCertificate = MigrationCertificate::count();
        $books = new Book();
        $birthBook = $books->where('book_type','जन्म दर्ता')->count();
        $deathBook = $books->where('book_type','मृत्यु दर्ता')->count();
        $marriageBook = $books->where('book_type','विवाह दर्ता')->count();
        $migrationCertificateBook = $books->where('book_type','बसाईसराई दर्ता')->count();
        $title = 'Dashboard';
        return view('home', [
            'title' => $title,
            'birth' => $birth,
            'marriage' => $marriage,
            'migrationCertificate' => $migrationCertificate,
            'death' => $death,
            'birthBook' => $birthBook,
            'deathBook' => $deathBook,
            'marriageBook' => $marriageBook,
            'migrationCertificateBook' => $migrationCertificateBook,
        ]);
    }
}
