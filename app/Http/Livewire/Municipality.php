<?php

namespace App\Http\Livewire;

use App\Death;
use App\Mysetting;
use App\Vdc;
use App\Book;
use Route;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Facades\DB;


class Municipality extends Component
{
    public $province;
    public $district;
    public $death;
    public $vdc;
    public $municipality;
    public $book;
    public $book_id;
    // public $books;
    public $book_code;
    public $ward_num;

    public function mount()
    {

        $mysetting=Mysetting::first();
        if ($mysetting) {
            $this->province =$mysetting->default_province;
            $this->district = $mysetting->default_district;
            $this->municipality = $mysetting->default_municipality;
            $this->vdc = $mysetting->default_vdc;
        }
        if ($this->death->id) {
            $this->province = $this->death->province;
            $this->district = $this->death->district;
            $this->vdc = $this->death->vdc;
            $this->municipality = $this->death->municipality;
            $this->book_id=$this->death->book_id;
            $this->ward_num=$this->death->ward_num;

        }

        if($this->book){
            $book=Book::where('id',$this->book)->first();
            $this->province = $book->province;
            $this->district = $book->district;
            $this->vdc = $book->vdc;
            $this->municipality = $book->municipality;
            $this->ward_num=$book->ward_no;
            $this->book_id=$book->id;
        }
    }

    public function render()
    {
        $municipalities =\App\Municipality::get();
        $vdcs = Vdc::get();
        $route = Route::currentRouteName();
        $books = Book::orderBy('id','desc')->get();
        $type="";
        if($route=="birth.create"){
            $type ='जन्म दर्ता';
        }elseif($route=="death.create"){
            $type = 'मृत्यु दर्ता';
        }elseif($route=="marriage.create"){
            $type = 'विवाह दर्ता';
        }
        // $books = $books->orderBy('id', 'desc')->get();
        return view('livewire.municipality', compact(['municipalities', 'vdcs','books','route','type']));
    }

}
