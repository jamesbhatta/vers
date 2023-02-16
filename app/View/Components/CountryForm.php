<?php

namespace App\View\Components;

use App\Country;
use App\Mysetting;
use Illuminate\View\Component;

class CountryForm extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $usercountry;
    public $label;
    public $name;
    public $id;
    public function __construct($usercountry,$label,$name,$id)
    {
        $this->usercountry = $usercountry;
        $this->label = $label;
        $this->name = $name;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        $countries = Country::get();
        return view('components.country-form',compact('countries'));
    }
}
