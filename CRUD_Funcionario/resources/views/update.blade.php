@extends('layouts.main')

@section('conteudo')

<div class="container caixa">
  <form action="{{(route('update',($funcionario->id)))}}" method="post" classe="needs-validation"  novalidate>
    {{csrf_field()}}
    <div class="form-group">
      <label for="nome">Nome</label>
      <input type="text" class="form-control" name="name" id="name" placeholder="nome" value="{{$funcionario->name}}">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="text" class="form-control" name="email" id="email" placeholder="email@dominio.com" value="{{$funcionario->email}}">
    </div>
    <div class="form-group">
      <label for="especialidade">Especialidade</label>
      <input type="text" class="form-control" name="especialidade" id="especialidade" placeholder="especialidade" value="{{$funcionario->especialidade}}">
    </div>
    <div class="form-group">
      <label for="salario">Salário</label>
      <input type="text" class="form-control" name="salario" id="salario" placeholder="salario" value="{{$funcionario->salario}}">
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <button type="button" class="btn btn-danger">Cancelar</button>
    </div>
    {{method_field ('PUT')}}
  </form>
  
</div>


@endsection