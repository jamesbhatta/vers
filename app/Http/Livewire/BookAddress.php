<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Vdc;
use App\Mysetting;
class BookAddress extends Component
{
    public $province;
    public $district;
    // public $book;
    public $vdc;
    public $municipality;
    public $book;
    public $registaar;
    public $ward_num;
    public $ward_number;

    public function mount()
    {

        $mysetting=Mysetting::first();
        if ($mysetting) {
            $this->province =$mysetting->default_province;
            $this->district = $mysetting->default_district;
            $this->municipality = $mysetting->default_municipality;
            $this->vdc = $mysetting->default_vdc;
        }
        if ($this->book->id) {
            $this->province = $this->book->province;
            $this->district = $this->book->district;
            $this->vdc = $this->book->vdc;
            $this->ward_number=$this->book->ward_no;
            $this->municipality = $this->book->municipality;
            $this->registaar = $this->book->registaar;
        }


    }

    public function render()
    {
        $municipalities =\App\Municipality::get();
        $registars =\App\Registaar::get();
        $vdcs = Vdc::get();
        return view('livewire.book-address',compact('municipalities','vdcs','registars'));
    }
}
