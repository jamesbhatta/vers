<?php

namespace App\Http\Livewire;

use App\Municipality;
use App\Vdc;
use Livewire\Component;

class MigrationFromAddress extends Component
{
    public $province;
    public $district;
    public $vdc;
    public $municipality;
    public $migrationFromAddress;

    public function mount()
    {
        if ($this->migrationFromAddress) {
            $this->province = $this->migrationFromAddress->before_province;

            $this->district = $this->migrationFromAddress->before_district;

            $this->vdc = $this->migrationFromAddress->before_vdc;

            $this->municipality = $this->migrationFromAddress->before_municipality;
        }

        if (old('before_province')) {
            $this->province = old('before_province');
        }
        if (old('before_district')) {
            $this->district = old('before_district');
        }
        if (old('before_municipality')) {
            $this->municipality = old('before_municipality');
        }
        if (old('before_vdc')) {
            $this->vdc = old('before_vdc');
        }
    }
    public function render()
    {
        $vdcs = Vdc::get();
        $addresses = Municipality::get();
        return view('livewire.migration-from-address', compact('vdcs', 'addresses'));
    }
}
