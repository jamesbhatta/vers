<?php

namespace App\Http\Livewire;

use App\Death;
use App\Mysetting;
use App\Vdc;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Municipality extends Component
{
    public $province;
    public $district;
    public $death;
    public $vdc;
    public $municipality;

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


    }

    public function render()
    {
        $municipalities =\App\Municipality::get();
        $vdcs = Vdc::get();
        return view('livewire.municipality', compact(['municipalities', 'vdcs']));
    }

}
