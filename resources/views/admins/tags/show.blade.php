@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">
            Ver Etiqueta
          </div>
          <div class="panel-body">
            <p>Nombre: <strong>{{ $tag->name}} </strong> </p>
            <p>URL amigable: <strong>{{ $tag->slug}} </strong> </p>
          </div>

          <div class="panel-footer">
              <a href="{{ route('tags.index')}}" class="btn btn-sm btn-default">Volver al index de etiquetas</a>
          </div>
        </div>
    </div>
  </div>
</div>
@endsection
