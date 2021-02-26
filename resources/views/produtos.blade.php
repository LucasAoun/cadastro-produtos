@extends('layouts.app', ["current"=>"produtos"])
@section('body')
<div class="card border">
  <div class="card-body">
    <h5 class="card-title">Cadastro de produtos</h5>
    <table class="table table-ordered table-hover">
      <thead>
        <tr>
          <th>Código</th>
          <th>Nome da categoria</th>
          <th>Nome do produto</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        @foreach($produtos as $prod)

          <tr>
            <td>{{$prod->id}}</td>
            <td>{{$prod->categoria->nome}}</td>
            <td>{{$prod->nome}}</td>
            <td>
              <a href="/produtos/editar/{{$prod->id}}" class="btn btn-sm btn-primary">Editar</a>
              <a href="/produtos/apagar/{{$prod->id}}" class="btn btn-sm btn-danger">Remover</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <div class="card-footer">
    <a href="categorias/novo" class="btn btn-sm btn-primary" role="button">Novo produto</a>
  </div>
</div>
@endsection
