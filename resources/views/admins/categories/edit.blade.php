@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">
            Editar Categoría
          </div>
          <div class="panel-body">
            {!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'PUT'])!!}
              @include('admins.categories.partials.form')
            {!! Form::close()!!}
          </div>

          <div class="panel-footer">
              <a href="{{ route('categories.index')}}" class="btn btn-sm btn-default">Volver al index de categorias</a>
          </div>
        </div>
    </div>
  </div>
</div>
@endsection
