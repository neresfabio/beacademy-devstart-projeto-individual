@extends('template.defaut')
@section('title','Lista de Usuários')
@section('body')
<div class="my-2 clearfix">
  <a href="{{ route('users.create') }}" class="btn btn-success float-left">Novo Usuário</a>
  <div class="btn-group float-right">
    <form action="{{route('users.index')}}" method="GET">
      <div class="input-group">
        <div class="input-group-prepend">
          <button class="btn btn-outline-secondary" type="submit"><i widht="20px" height="20px" data-feather="search"></i></button>
        </div>
          <input type="search" class="form-control" name="search">
      </div>
    </form>
  </div>
</div>
    <table class="table table-hover">
      <caption>Lista de Usuários</caption>
      <thead>
        <tr >
          <th scope="col">Nome</th>
          <th scope="col">Contato</th>
          <th scope="col">Email</th>
          <th scope="col">Profissão</th>
          <th scope="col">Entrada</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $user)
          <tr>
            <th scope="row">{{$user->name}}</th>
            <td>{{$user->phone}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->profession}}</td>
            <td>{{date('d/m/Y - H:i',strtotime($user->created_at))}}</td>
            <td>
              <a href="{{route('users.show',$user->id)}}" class="btn btn-sm" data-toggle="tooltip" data-placement="left" title="Ver"><i data-feather="eye"></i></a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    {{$data->links('pagination::bootstrap-4')}}
@endsection 