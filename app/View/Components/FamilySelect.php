<?php

namespace App\View\Components;

use App\Family;
use Illuminate\View\Component;

class FamilySelect extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $families;
    public function __construct()
    {
        $this->families = Family::orderBy('name')->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.family-select');
    }
}
