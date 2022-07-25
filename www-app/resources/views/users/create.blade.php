@extends('template.defaut')
@section('title','Cadastrar Usuário')
@section('body')
<div class="container py-5">
    @if($errors->any())
        <div class="alert alert-danger" role="alert">
          @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </div>
    @endif
<form action="{{route('users.store')}}" method="POST" class="mt-5"> 
      @csrf
          {{-- Linha 1 --}}
          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="name">Nome</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Pedro" >
            </div>
            <div class="form-group col-md-3">
              <label for="email">E-mail</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="exemp@gmail.com">
            </div>
            <div class="form-group col-md-3">
              <label for="identity_card">RG</label>
              <input type="text" class="form-control" id="identity_card" name="identity_card" placeholder="1111001">
            </div>
            <div class="form-group col-md-3">
              <label for="age">Idade</label>
              <input type="text" class="form-control" id="age" name="age" placeholder="21">
            </div>
          </div>
          {{-- Linha 2 --}}
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="social_security">CPF</label>
              <input type="text" class="form-control" id="social_security" name="social_security" placeholder="123.123.123-12">
            </div>
            <div class="form-group col-md-4">
              <label for="phone">Telefone</label>
              <input type="tel" class="form-control" id="phone" name="phone" placeholder="99 99999-9999">
            </div>
            <div class="form-group col-md-4">
              <label for="profession">Profissão</label>
              <input type="text" class="form-control" id="profession" name="profession" placeholder="Freelancer">
            </div>
          </div>
          {{-- Linha 3 --}}
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="postal_code">CEP</label>
              <input type="text" class="form-control" id="postal_code" name="postal_code" placeholder="00011100">
            </div>
            <div class="form-group col-md-2">
              <label for="gender">SEX</label>
              <input type="text" class="form-control" id="gender" name="gender" placeholder="SEXO">
            </div>
            <div class="form-group col-md-2">
              <label for="marital_status">Estado Civíl</label>
              <input type="text" class="form-control" id="marital_status" name="marital_status" placeholder="União estável">
            </div>
          </div>       
          {{-- <div class="form-group form-check">
             <input type="checkbox" class="form-check-input" id="exampleCheck1">
             <label class="form-check-label" for="exampleCheck1">Check me out</label>
           </div> --}}
          <button type="submit" class="btn btn-success btn-sm">Enviar</button>
          <button type="reset" class="btn btn-warning btn-sm">Limpar</button>
          <a href="{{route('users.index')}}" class="btn btn-danger btn-sm" role="button" aria-pressed="true">Cancelar</a>

    </form>
</div>
@endsection