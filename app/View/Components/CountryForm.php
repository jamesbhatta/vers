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
    public function __construct($usercountry,$label,$name)
    {
        $this->usercountry = $usercountry;
        $this->label = $label;
        $this->name = $name;
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
