<?php

namespace App\Http\Livewire;

use App\MotherTongue;
use App\Municipality;
use App\Mysetting;
use App\Registaar;
use App\Vdc;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DefaultForm extends Component
{
    public $country;
    public $province;
    public $district;
    public $vdc;
    public $municipality;
    public $update_id="";
    public $my_default_registaar;
    public $my_default_tongue;
    public $my_default_vdc;
    public function mount(){
        $default = Mysetting::first();

        if($default!=null){
            $this->country = $default->country;
            $this->province = $default->default_province;
            $this->district = $default->default_district;
            $this->municipality = $default->default_municipality;
            $this->my_default_vdc = $default->default_vdc;
            $this->update_id=$default;
            $this->my_default_registaar = $default->default_registaar;
            $this->my_default_tongue = $default->default_mother_tongue;
        }

    }
    public function render()
    {
        $vdcs = Vdc::get();
        $municipalities = Municipality::get();
        $registaars = Registaar::get();
        $mothertongues = MotherTongue::get();
        $vdcs = Vdc::get();
        return view('livewire.default-form',compact('municipalities','vdcs','registaars','mothertongues','vdcs'));
    }
}
