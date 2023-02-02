<?php

namespace App\Http\Livewire;

use App\Death;
use App\Mysetting;
use App\Vdc;
use App\Book;
use Route;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Municipality extends Component
{
    public $province;
    public $district;
    public $death;
    public $vdc;
    public $municipality;
    public $book;
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
        }

        if($this->book){
            $book=Book::where('id',$this->book)->first();
            $this->province = $book->province;
            $this->district = $book->district;
            $this->vdc = $book->vdc;
            $this->municipality = $book->municipality;
            $this->ward_num=$book->ward_no;
        }

    }

    public function render()
    {
        $municipalities =\App\Municipality::get();
        $vdcs = Vdc::get();
        $route = Route::currentRouteName();
        if($route=="birth.create"){
            $books =\App\Book::where('book_type','जन्म दर्ता')->get();
        }elseif($route=="death.create"){
            $books =\App\Book::where('book_type','मृत्यु दर्ता')->get();
        }
        return view('livewire.municipality', compact(['municipalities', 'vdcs','books','route']));
    }

}
