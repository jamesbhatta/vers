<?php

namespace App\View\Components;

use App\Family;
use App\WithnessRelationship;
use Illuminate\View\Component;

class RelationshipSelect extends Component
{
    public $withnessRelationships;
    public $family;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Family $family)
    {
        $this->family = $family;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $this->withnessRelationships = WithnessRelationship::get();
        return view('components.relationship-select');
    }
}
