@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">
            Crear etiqueta
          </div>
          <div class="panel-body">
            {!! Form::open(['route' => ['tags.store'], 'method' => 'POST'])!!}
              @include('admins.tags.partials.form')
            {!! Form::close()!!}
          </div>

          <div class="panel-footer">
              <a href="{{ route('tags.index')}}" class="btn btn-sm btn-default">Volver al index de etiquetas</a>
          </div>
        </div>
    </div>
  </div>
</div>
@endsection
