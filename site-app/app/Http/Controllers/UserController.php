<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserFormRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }
    // Create
    public function create()
    {
        return view('users.create');
    }
    public function store(StoreUpdateUserFormRequest $request)
    {
        $request = $request->all();
        
        $this->model->create($request);

        return redirect()->route('users.index');    
    }
    // Read
    public function index()
    {
        $data = $this->model->all();

        return view('users.index',compact('data'));    
    }
    public function show($id)
    {
        if(!$user = $this->model->find($id))
            return redirect()->route('users.index');

        $title = 'Usuário '.$user->name;

        return view('users.show', compact('user','title'));
    }
    // Update
    public function edit($id)
    {
        if(!$user = $this->model->find($id))
            return redirect()->route('users.index');

        return view('users.edit',compact('user'));
    }
    public function update(StoreUpdateUserFormRequest $request, $id)
    {
        if(!$user = $this->model->find($id))
            return redirect()->route('users.index');

        $data = $request->all();

        if($request->password)
            $data['password'] = bcrypt($request->password);
        
        $user->update($data);

        return redirect()->route('users.index');
    }
    // Delete
    public function destroy($id)
    {
        if(!$user = $this->model->find($id))
            return redirect()->route('users.index');

        $user->delete();

        return redirect()->route('users.index');
    }
}
