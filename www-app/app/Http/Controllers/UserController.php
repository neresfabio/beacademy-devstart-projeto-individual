<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreUpdateUserFormRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function index(Request $request)
    {
        $data = $this->model->getUsers(
            $request->search ?? ''
        );

        return view('users.index',compact('data'));
    }
    
    public function show($id)
    {
        if(!$user = DB::table('users')->find($id))
            return redirect()->route('users.index');
        return view('users.show',compact('user'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(StoreUpdateUserFormRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->social_security);

        $this->model->create($data);

        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        if(!$user = $this->model->find($id))
            return redirect()->route('users.index');
        return view('users.edit',compact('user'));
    }

    public function update(Request $request, $id)
    {        
        if(!$user = $this->model->find($id))
            return redirect()->route('users.index');
        
        $data = $request->all();

        $user->update($data);

        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        if(!$user = $this->model->find($id))
            return redirect()->route('users.index');

        $user->delete();

        return redirect()->route('users.index');
    }

}
