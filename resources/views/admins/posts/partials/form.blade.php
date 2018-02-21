{!! Form::hidden('user_id', auth()->user()->id) !!}
<div class="form-group">
  {!! Form::label('category_id', 'Cateogría:')!!}
  {!! Form::select('category_id', $categories, null, ['class'=> 'form-control', 'id' => 'category_id'])!!}
  @if ($errors->has('category_id'))
      <span class="help-block">
          <strong>{{ $errors->first('category_id') }}</strong>
      </span>
  @endif
</div>
<div class="form-group">
  {!! Form::label('name', 'Nombre')!!}
  {!! Form::text('name', null, ['class'=> 'form-control', 'id' => 'name'])!!}
  @if ($errors->has('name'))
      <span class="help-block">
          <strong>{{ $errors->first('name') }}</strong>
      </span>
  @endif
</div>
<div class="form-group">
  {!! Form::label('slug', 'URL amigable:')!!}
  {!! Form::text('slug', null, ['class'=> 'form-control', 'id' => 'slug'])!!}
  @if ($errors->has('slug'))
      <span class="help-block">
          <strong>{{ $errors->first('slug') }}</strong>
      </span>
  @endif
</div>
<div class="form-group">
  {!! Form::label('file', 'Imagen:')!!}
  {!! Form::file('file')!!}
  @if ($errors->has('file'))
      <span class="help-block">
          <strong>{{ $errors->first('file') }}</strong>
      </span>
  @endif
</div>
<div class="form-group">
  {!! Form::label('status', 'Estado:')!!}
  <br>
  <label>
    {!! Form::radio('estatus', 'PUBLISHED')!!} Publicado
  </label>
  <label>
    {!! Form::radio('estatus', 'DRAFT')!!} Borrador
  </label>
</div>
<div class="form-group">
  {!! Form::label('tag', 'Etiquetas:')!!}
  <div>
    @foreach($tags as $tag)
      <label>
        {!! Form::checkbox('tags[]', $tag->id)!!} {{ $tag->name }}
      </label>
    @endforeach
  </div>
</div>
<div class="form-group">
  {!! Form::label('excerpt', 'Extracto:')!!}
  {!! Form::textarea('excerpt', null, ['class' => 'form-control', 'rows' => '2'])!!}
</div>
<div class="form-group">
  {!! Form::label('body', 'Descripción:')!!}
  {!! Form::textarea('body', null, ['class'=> 'form-control', 'id' => 'body'])!!}
  @if ($errors->has('body'))
      <span class="help-block">
          <strong>{{ $errors->first('body') }}</strong>
      </span>
  @endif
</div>
<div class="form-group">
  {!! Form::submit('Guardar', ['class' => 'btn btn-primary'])!!}
</div>

@section('scripts')
<script type="text/javascript" src="{{asset('vendor/toSlug/jquery.stringtoslug.min.js')}}"></script>
<script type="text/javascript" src="{{asset('vendor/speakingurl/speakingurl.js')}}"></script>
<script type="text/javascript">
$(document).ready(function(){
  $("#name, #slug").stringToSlug({
    callback: function(text){
      $("#slug").val(text);
    }
  });
});
</script>
@endsection
