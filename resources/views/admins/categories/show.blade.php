@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">
            Ver categoría
          </div>
          <div class="panel-body">
            <p>Nombre: <strong>{{ $category->name}} </strong> </p>
            <p>URL amigable: <strong>{{ $category->slug}} </strong> </p>
            <label for="body">Descripción:</label>
            <p>{{ $category->body }}</p>
          </div>

          <div class="panel-footer">
              <a href="{{ route('categories.index')}}" class="btn btn-sm btn-default">Volver al index de categorias</a>
          </div>
        </div>
    </div>
  </div>
</div>
@endsection
