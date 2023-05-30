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
        if ($this->afterMigration->id) {
            $this->province = $this->afterMigration->migration_province;
            $this->district = $this->afterMigration->migration_district;
            $this->vdc = $this->afterMigration->migration_vdc;
            $this->municipality = $this->afterMigration->migration_municipality;
        }

        if (old('migration_province')) {
            $this->province = old('migration_province');
        }
        if (old('migration_district')) {
            $this->district = old('migration_district');
        }
        if (old('migration_municipality')) {
            $this->municipality = old('migration_municipality');
        }
        if (old('migration_vdc')) {
            $this->vdc = old('migration_vdc');
        }
    }

    public function render()
    {
        $aftermigration =\App\Municipality::get();
        $vdcs = Vdc::get();
        return view('livewire.after-migration', compact(['aftermigration', 'vdcs']));
    }
}
