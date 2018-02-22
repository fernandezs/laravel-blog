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
            <p>Nombre: <strong>{{ $post->name}} </strong> </p>
            <p>URL amigable: <strong>{{ $post->slug}} </strong> </p>
            <label>Imagen:</label>
            <a href="#" class="thumbnail">
              <img src="{{$post->file}}" alt="Imagen del post">
            </a>
            <label for="body">Descripción:</label>
            <p>{{ $post->body }}</p>
          </div>

          <div class="panel-footer">
              <a href="{{ route('posts.index')}}" class="btn btn-sm btn-default">Volver al index de entradas</a>
          </div>
        </div>
    </div>
  </div>
</div>
@endsection
