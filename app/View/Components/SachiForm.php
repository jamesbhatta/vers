<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SachiForm extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $death;
    public $relation;
    public function __construct($death, $relation)
    {
        $this->death = $death;
        $this->relation = $relation;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sachi-form');
    }
}
