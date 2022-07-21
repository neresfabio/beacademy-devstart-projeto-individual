@extends('template.users')
@section('title','Cadastrar Usuário')
@section('body')
<div class="container py-5">
    
    <form action="{{ route('users.store') }}" method="POST" class="mt-5"> 
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
              <label for="rg">RG</label>
              <input type="text" class="form-control" id="rg" name="rg" placeholder="1111001">
            </div>
            <div class="form-group col-md-3">
              <label for="age">Idade</label>
              <input type="text" class="form-control" id="age" name="age" placeholder="21">
            </div>
          </div>
          {{-- Linha 2 --}}
          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="cpf">CPF</label>
              <input type="text" class="form-control" id="cpf" name="cpf" placeholder="123.123.123-12">
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
              <label for="sex">SEX</label>
              <input type="text" class="form-control" id="sex" name="sex" placeholder="SEXO">
            </div>
            <div class="form-group col-md-2">
              <label for="status_civil">Estado Civíl</label>
              <input type="text" class="form-control" id="status_civil" name="status_civil" placeholder="União estável">
            </div>
          </div>       
          {{-- <div class="form-group form-check">
             <input type="checkbox" class="form-check-input" id="exampleCheck1">
             <label class="form-check-label" for="exampleCheck1">Check me out</label>
           </div> --}}
          <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
</div>
@endsection