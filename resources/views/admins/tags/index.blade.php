@extends('layouts.app')
@section('content')
  @component('admins.components.list')
    @slot('title')
      Lista de etiquetas
    @endslot
    @slot('link_create')
      {{ route('tags.create')}}
    @endslot
    @slot('table')
    @foreach($tags as $tag)
    <tr>
      <td>{{$tag->id}}</td>
      <td>{{ $tag->name}}</td>
      <td width="10px">
        <a href="{{ route('tags.show', $tag->id )}}" class="btn btn-sm btn-success">Ver</a>
      </td>
      <td width="10px">
        <a href="{{ route('tags.edit', $tag->id )}}" class="btn btn-sm btn-default">Editar</a>
      </td>
      <td width="10px">
        {!! Form::open([ 'route' => ['tags.destroy', $tag->id], 'method' => 'DELETE'])!!}
          <button type="submit" name="delete" class="btn btn-sm btn-danger">Eliminar</button>
        {!! Form::close() !!}
      </td>
    </tr>
    @endforeach
    @endslot
    @slot('render')
      {{ $tags->render()}}
    @endslot
@endcomponent
@endsection
