<?php

namespace App\Http\Controllers;

use App\Country;
use App\MotherTongue;
use App\Mysetting;
use App\Registaar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingsController extends Controller
{
    public function index(Registaar $registaar,Country $country,MotherTongue $motherTongue)
    {
        $title = "Settings";
        $mysetting = Mysetting::first();
        $registaars = Registaar::orderBy('id','desc')->get();
        // if($mysetting){
        //     $mysetting = $mysetting->default_admin_name;
        // }
        return view('settings.index',compact('mysetting','title','registaars','registaar','country','motherTongue'));
    }
    public function syncForm(Request $request)
    {
        Mysetting::create($request->validate([
            'country' => 'nullable',
            'default_province' => 'nullable',
            'default_district' => 'nullable',
            'default_vdc' => 'nullable',
            'default_municipality' => 'nullable',
            'default_registaar' => 'nullable',
            'default_mother_tongue'=>'nullable',
        ]));

        return redirect()->back();
    }

    public function syncUpdate(Request $request, Mysetting $mysetting)
    {
        $mysetting->update($request->validate([
            'country' => 'nullable',
            'default_province' => 'nullable',
            'default_district' => 'nullable',
            'default_vdc' => 'nullable',
            'default_municipality' => 'nullable',
            'default_registaar' => 'nullable',
            'default_mother_tongue'=>'nullable',
        ]));
        return redirect()->back();

    }

    public function syncName(Request $request, Mysetting $mysetting)
    {
        $mysetting->update($request->validate([
            'default_admin_name' => 'required',
        ]));

        return redirect()->back();
    }
    public function sync(Request $request)
    {
        if (!auth()->user()->hasAnyRole(['super-admin', 'admin'])) {
            abort(403, 'You are not authorized to this resource');
        }

        $request->validate([
            // 'app_name' => 'required'
        ]);

        settings()->set($request->except('_token'));
        return redirect()->back()->with('success', 'Settings have been saved');
    }

    public function registaar(Request $request)
    {
        Registaar::create($request->validate([
            'name' => 'required',
        ]));
        return redirect()->back();
    }

    public function registaarDelete(Registaar $registaar){
        $registaar->delete();
        return redirect()->back();
    }

    public function registaarEdit(Registaar $registaar)
    {
        $title = "Settings";
        $mysetting = Mysetting::first();
        $registaars = Registaar::orderBy('id','desc')->get();
        // if($mysetting){
        //     $mysetting = $mysetting->default_admin_name;
        // }
        return view('settings.index',compact('mysetting','title','registaars','registaar'));
    }
}
