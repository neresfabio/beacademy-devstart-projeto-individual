@extends('template.users')
@section('title','Lista de Usuários')
@section('body')
<div class="container">
    <a href="{{ route('users.insert') }}" class="btn my-1 btn-dark">Novo Usuário</a>
    <table class="table">
      <caption>Lista de Usuários</caption>
    <thead>
      <tr >
        <th scope="col">ID</th>
        <th scope="col">NOME</th>
        <th scope="col">TELEFONE</th>
        <th scope="col">EMAIL</th>
        <th scope="col">CEP</th>
        <th scope="col">ENTRADA</th>
        <th scope="col">AÇÕES</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
      <tr>
        <th scope="row">{{$user->id}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->phone}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->postal_code}}</td>
        <td>{{$user->profession}}</td>
        <td>{{date('d/m/Y - H:i',strtotime($user->created_at))}}</td>
        <td><a href="{{route('users.show',$user->id)}}" class="btn btn-info text-white">VER</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection