@extends('template.users')
@section('title','Usuário')
@section('body')
<table class="table">
    <caption>Usuário: {{$user->name}}</caption>
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">NOME</th>
        <th scope="col">EMAIL</th>
        <th scope="col">DATA CADASTRO</th>
        <th scope="col">AÇÕES</th>
      </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{date('d/m/Y - H:i',strtotime($user->created_at))}}</td>
            <td class="btn-group" role="group">
                <a href="#" class="btn btn-warning text-white">EDITAR</a>
                <a href="#" class="btn btn-danger text-white">DELETAR</a>
            </td>
        </tr>
    </tbody>
</table>
@endsection