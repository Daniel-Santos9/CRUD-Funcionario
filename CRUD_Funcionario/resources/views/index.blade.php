@extends('layouts.main')

@section('conteudo')


@if(session('insert') == true)
    <div class="container alert-top">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Sucesso!</strong>  O(a)  <strong>{{ session('name') }} </strong> foi cadastrado(a).
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
@endif

@if(session('update') == true)
    <div class="container alert-top">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Sucesso!</strong>  O(a)  <strong>{{ session('name') }} </strong> foi atualizado(a).
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
@endif
@if(session('delete') == true)
      <div class="container alert-top">
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Sucesso!</strong>  O(a)  <strong>{{ session('name') }} </strong> foi excluido(a).
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
      </div>
@endif

<div class="container marg-top">
    <div class="col-md-12">
    <table class="table">
      <thead class="thead">
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Nome</th>
          <th scope="col">Email</th>
          <th scope="col">Especialidade</th>
          <th scope="col">Salário</th>
          <th  scope="col">Ação</th>
        </tr>
      </thead>
      <tbody>
      @foreach($Funcionarios as $func)
        <tr>
          <th scope="row">{{$func->id}}</th>
          <td>{{$func->name}}</td>
          <td>{{$func->email}}</td>
          <td>{{$func->especialidade}}</td>
          <td>{{$func->salario}}</td>
          <td>
              <a href="edit/{{$func->id}}" type="button" class="btn btn-warning btn-sm">Editar</a>
              <a href="destroy/{{$func->id}}" class="btn btn-danger btn-sm" onclick="return confirm('Deseja excluir esse registro?')" >Excluir</a>
          </td> 
        </tr>
        @endforeach
      </tbody>
    </table>
    </div>
    
</div>

@endsection