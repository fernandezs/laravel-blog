@extends('layouts.app')
@section('content')
  @component('admins.components.list')
    @slot('title')
      Lista de entradas
    @endslot
    @slot('link_create')
      {{ route('posts.create')}}
    @endslot
    @slot('table')
    @foreach($posts as $post)
    <tr>
      <td>{{$post->id}}</td>
      <td>{{ $post->name}}</td>
      <td width="10px">
        <a href="{{ route('posts.show', $post->id )}}" class="btn btn-sm btn-success">Ver</a>
      </td>
      <td width="10px">
        <a href="{{ route('posts.edit', $post->id )}}" class="btn btn-sm btn-default">Editar</a>
      </td>
      <td width="10px">
        {!! Form::open([ 'route' => ['posts.destroy', $post->id], 'method' => 'DELETE'])!!}
          <button type="submit" name="delete" class="btn btn-sm btn-danger">Eliminar</button>
        {!! Form::close() !!}
      </td>
    </tr>
    @endforeach
    @endslot
    @slot('render')
      {{ $posts->render()}}
    @endslot
@endcomponent
@endsection
