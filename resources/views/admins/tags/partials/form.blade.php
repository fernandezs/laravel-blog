<div class="form-group">
  {!! Form::label('name', 'Nombre')!!}
  {!! Form::text('name', null, ['class'=> 'form-control', 'id' => 'name', 'name' => 'name'])!!}
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
