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
    public $mtype;
    public $administrator;
    public $reg_number;
    public $entry_date;
    public function mount()
    {

        $mysetting=Mysetting::first();
        if ($mysetting) {
            $this->province =$mysetting->default_province;
            $this->district = $mysetting->default_district;
            $this->municipality = $mysetting->default_municipality;
            $this->vdc = $mysetting->default_vdc;
            $this->administrator=$mysetting->default_registaar;
        }
        if ($this->death->id) {
            $this->province = $this->death->province;
            $this->district = $this->death->district;
            $this->vdc = $this->death->vdc;
            $this->municipality = $this->death->municipality;
            $this->book_id=$this->death->book_id;
            $this->ward_num=$this->death->ward_num;
            $this->administrator=$this->death->administrator;
            $this->reg_number=$this->death->reg_number;
            $this->entry_date=$this->death->entry_date;

        }

        if($this->book){
            $book=Book::where('id',$this->book)->first();
            $this->province = $book->province;
            $this->district = $book->district;
            $this->vdc = $book->vdc;
            $this->municipality = $book->municipality;
            $this->ward_num=$book->ward_no;
            $this->book_id=$book->id;
            $this->administrator=$book->registaar;
        }
    }

    public function render()
    {
        $municipalities =\App\Municipality::get();
        $vdcs = Vdc::get();
        $route = Route::currentRouteName();
        $books = Book::orderBy('id','desc')->get();
        $type="";
        if($route=="birth.create" || $route=="birth.edit"){
            // $type ='जन्म दर्ता';
            $this->mtype="जन्म दर्ता";
        }elseif($route=="death.create" || $route=="death.edit"){
            $this->mtype = 'मृत्यु दर्ता';
        }elseif($route=="marriage.create" || $route=="marriage.edit"){
            $this->mtype = 'विवाह दर्ता';
        }
        elseif($route=="migration.create" || $route=="migration.edit"){
            $this->mtype = 'बसाईसराई दर्ता';
        }

        if (old('book_id')) {
            $this->book_id = old('book_id');
        }
        if (old('province')) {
            $this->province = old('province');
        }
        if (old('district')) {
            $this->district = old('district');
        }
        if (old('vdc')) {
            $this->vdc = old('vdc');
        }
        if (old('municipality')) {
            $this->municipality = old('municipality');
        }
        if (old('ward_num')) {
            $this->ward_num = old('ward_num');
        }
        if (old('administrator')) {
            $this->administrator = old('administrator');
        }

        if (old('reg_number')) {
            $this->reg_number = old('reg_number');
        }
        if (old('entry_date')) {
            $this->entry_date = old('entry_date');
        }

        // $books = $books->orderBy('id', 'desc')->get();
        return view('livewire.municipality', compact(['municipalities', 'vdcs','books']));
    }

    public function changeEvent($value)
    {
        if($value){
            $book=Book::where('id',$value)->first();
        $this->province = $book->province;
        $this->district = $book->district;
        $this->vdc = $book->vdc;
        $this->municipality = $book->municipality;
        $this->ward_num=$book->ward_no;
        $this->book_id=$book->id;
        $this->administrator=$book->registaar;

        }
    }
}
