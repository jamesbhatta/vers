<?php

namespace App\Http\Controllers;

use App\Organization;
use App\PhysicalProgress;
use Illuminate\Http\Request;
use App\Project;
use App\Post;
use App\Ward;
use App\Representative;


class IndexController extends Controller
{
    public function index()
    {
        return redirect('login');
    }
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
