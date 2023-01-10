<?php

namespace App\View\Components;

use App\Mysetting;
use App\Registaar;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class Darta extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $death;
    public function __construct($death)
    {
        $this->death = $death;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $default_registaar = "";
        $mysetting = "";
        $mysettings = Mysetting::first();
        $registaars = Registaar::get();
        if($mysettings){
            $mysetting=$mysettings->default_admin_name;
            $default_registaar=Mysetting::first()->default_registaar;
        }
        // if($mysetting->default_registaar != null){
        //     $default_registaar = $mysetting->default_registaar;

        // }
        return view('components.darta',compact('mysetting','registaars','default_registaar'));
    }
}
