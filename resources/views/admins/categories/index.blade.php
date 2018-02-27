@extends('layouts.app')
@section('content')
  @component('admins.components.list')
    @slot('title')
      Lista de categorías
    @endslot
    @slot('link_create')
      {{ route('categories.create')}}
    @endslot
    @slot('table')
    @foreach($categories as $category)
    <tr>
      <td>{{$category->id}}</td>
      <td>{{ $category->name}}</td>
      <td width="10px">
        <a href="{{ route('categories.show', $category->id )}}" class="btn btn-sm btn-success">Ver</a>
      </td>
      <td width="10px">
        <a href="{{ route('categories.edit', $category->id )}}" class="btn btn-sm btn-default">Editar</a>
      </td>
      <td width="10px">
        {!! Form::open([ 'route' => ['categories.destroy', $category->id], 'method' => 'DELETE'])!!}
          <button type="submit" name="delete" class="btn btn-sm btn-danger">Eliminar</button>
        {!! Form::close() !!}
      </td>
    </tr>
    @endforeach
    @endslot
    @slot('render')
      {{ $categories->render()}}
    @endslot
@endcomponent
@endsection
