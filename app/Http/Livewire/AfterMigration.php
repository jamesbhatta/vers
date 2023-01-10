<?php

namespace App\Http\Livewire;
use App\Mysetting;
use Livewire\Component;
use App\Vdc;
use Illuminate\Support\Facades\Auth;

class AfterMigration extends Component
{
    public $province;
    public $district;
    public $afterMigration;
    public $vdc;
    public $municipality;

    public function mount()
    {

        $mysetting=Mysetting::where('id', Auth::user()->id)->first();
        if ($mysetting) {
            $this->province =$mysetting->default_province;
            $this->district = $mysetting->default_district;
            $this->municipality = $mysetting->default_municipality;
            $this->vdc = $mysetting->default_vdc;
        }
        if ($this->afterMigration->id) {
            $this->province = $this->afterMigration->province;
            $this->district = $this->afterMigration->district;
            $this->vdc = $this->afterMigration->vdc;
            $this->municipality = $this->afterMigration->municipality;
        }


    }

    public function render()
    {
        $aftermigration =\App\Municipality::get();
        $vdcs = Vdc::get();
        return view('livewire.after-migration', compact(['aftermigration', 'vdcs']));
    }
}
