<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth')->except(['destroy','store']);
    }

    //
    public function index()
    {
        $users = User::all();
        return view('admin.users',compact('users'));
    }

    public function destroy(User $user)
    {
//        $user = User::find(User );
        $user->delete();
        return back();
    }

    public function update(User $user)
    {
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email'
        ]);

        $user->name = request('name');
        $user->email = request('email');
        $user->save();
        return back();
    }

    public function store()
    {
        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);

//
        return back();
    }

}
