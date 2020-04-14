@extends('layouts.main')

@section('conteudo')
<div class="container caixa">

  @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
  <form action="{{route('store')}}" method="post">
    {{csrf_field()}}

    <div class="form-group">
    <label for="validationServer03">Nome</label>
      <input type="text" class="form-control"  name="name" id="name" placeholder="nome">
       
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="email@dominio.com">
  
    </div>
    <div class="form-group">
      <label for="especialidade">Especialidade</label>
      <input type="text" class="form-control" name="especialidade" id="especialidade" placeholder="especialidade">
    
    </div>
    <div class="form-group">
      <label for="salario">Salário</label>
      <input type="text" class="form-control" name="salario" id="salario" placeholder="salario">
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Cadastrar</button>
      <button type="button" class="btn btn-danger">Cancelar</button>
    </div>
  </form>
</div>


@endsection