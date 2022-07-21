<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // construtor p models

    public function __construct(User $user)
    {
        $this->model = $user;
    }

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

    public function insert()
    {
        return view('users.insert');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->cpf);

        $this->model->insert($data);

        return redirect()->route('users.index');
    }
}
