<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MotherTongue extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name;
    public $userdata;
    public $id;
     public function __construct($name, $userdata,$id)
    {
        $this->name = $name;
        $this->userdata = $userdata;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $mothertongues = \App\MotherTongue::get();
        return view('components.mother-tongue',compact('mothertongues'));
    }
}
