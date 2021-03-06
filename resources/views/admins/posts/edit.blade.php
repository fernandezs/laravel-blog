@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">
            Editar entrada
          </div>
          <div class="panel-body">
            {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT', 'files' => 'true', 'enctype' => 'multipart/form-data'])!!}
              @include('admins.posts.partials.form')
            {!! Form::close()!!}
          </div>
          <div class="panel-footer">
              <a href="{{ route('posts.index')}}" class="btn btn-sm btn-default">Volver al index de entradas</a>
          </div>
        </div>
    </div>
  </div>
</div>
@endsection
