<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        //$user = User::find($id);
        if(!$user = User::where('id',$id)->first())
            return redirect()->route('users.index');

        return view('users.show', compact('user'));
    }
}
