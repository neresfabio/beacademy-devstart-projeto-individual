@extends('template.defaut')
@section('title',"Usuário {{$user->name}}")
@section('body')
<form action="{{route('users.update', $user->id)}}" method="POST" class="shadow-sm m-2 p-4 bg-white rounded">
    @method('PUT')
    @csrf
    <legend>Usuário: {{$user->name}}</legend>
    <div class="form-row ">
        <div class="form-group col-md-4">
            <label for="name">Nome</label>
            <div>
                <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
            </div>
        </div>
        <div class="form-group col-md-4">
            <label for="email">email</label>
            <div>
                <input type="text" class="form-control" id="email" name="email" value="{{$user->email}}">
            </div>
        </div>
        <div class="form-group col-md-4">
            <label for="identity_card">RG</label>
            <div>
                <input type="text" class="form-control" id="identity_card" name="identity_card" value="{{$user->identity_card}}">
            </div>
        </div>
    </div>
    <div class="form-row ">
        <div class="form-group col-md-4">
            <label for="age">Idade</label>
            <div>
                <input type="text" class="form-control" id="age" name="age" value="{{$user->age}}">
            </div>
        </div>
        <div class="form-group col-md-4">
            <label for="social_security">CPF</label>
            <div>
                <input type="text" class="form-control" id="social_security" name="social_security" value="{{$user->social_security}}">
            </div>
        </div>
        <div class="form-group col-md-4">
            <label for="phone">Telefone</label>
            <div>
                <input type="text" class="form-control" id="phone" name="phone" value="{{$user->phone}}">
            </div>
        </div>
    </div>
    <div class="form-row ">
        <div class="form-group col-md-4">
            <label for="profession">Profissão</label>
            <div>
                <input type="text" class="form-control" id="profession" name="profession" value="{{$user->profession}}">
            </div>
        </div>
        <div class="form-group col-md-4">
            <label for="postal_code">CEP</label>
            <div>
                <input type="text" class="form-control" id="postal_code" name="postal_code" value="{{$user->postal_code}}">
            </div>
        </div>
        <div class="form-group col-md-1">
            <label for="gender">Genero</label>
            <div>
                <input type="text" class="form-control" id="gender" name="gender" value="{{$user->gender}}">
            </div>
        </div>
    </div>
    <div class="form-row ">
        <div class="form-group col-md-4">
            <label for="marital_status">Estado cívil</label>
            <div class="">
                <input type="text" class="form-control" id="marital_status" name="marital_status" value="{{$user->marital_status}}">
            </div>
        </div>
    </div>
    <div>
        <button type="submit" class="btn btn-success">Atualizar</button>
    </div>
</form>
@endsection