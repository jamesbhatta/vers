<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'User';
        $users = User::with(['birth','death','marriage','migrationCertificate'])->latest()->paginate(50);
        return view('user.index', compact('users', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        $title = 'User';
        $roles = Role::get();
        return view('user.form', compact('user', 'roles', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'username' => 'required',
            'roles' => 'required',
            'password' => 'required|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        if ($user) {
            $user->syncRoles($request->roles);
        }

        return redirect()
            ->route('user.index')
            ->with('success', 'User has been added with username ' . $user->username);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Gate::authorize('user.edit');
        $title = 'प्रयोगकर्ता';
        $user = User::find($id);
        // return $user->getRoleNames();
        $roles = Role::latest()->get();

        return view('user.form', compact('user', 'roles', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        Gate::authorize('user.edit');

        $user->update(
            $request->validate([
                'name' => 'required',
                'username' => 'required',
            ]),
        );
        if ($request->roles) {
            $user->syncRoles($request->roles);
        }
        return redirect()
            ->route('user.index')
            ->with('success', 'Account has been updated for  ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()
            ->route('user.index')
            ->with('success', 'User has been deleted');
    }

    public function profile(User $user)
    {
        return view('user.profile', compact('user'));
    }
    public function profileUpdate(Request $request, User $user)
    {
        $user->update(
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'username' => 'required',
            ]),
        );

        return redirect()
            ->back()
            ->with('success', 'Your profile updated successfully');
    }

    public function password(User $user)
    {
        return view('user.password', compact('user'));
    }

    public function change(Request $request, User $user)
    {
        $request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $user->update(['password' => Hash::make($request->password)]);
        return redirect()
            ->back()
            ->with('success', 'User password Changed');
    }
}
