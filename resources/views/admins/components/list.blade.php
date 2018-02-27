<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">
            {{ $title }}
            <a href="{{ $link_create }}" class="btn btn-primary btn-sm pull-right">Crear</a>
          </div>
          <div class="panel-body">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th width="10px">ID</th>
                  <th>Nombre</th>
                  <th colspan="3">&nbsp;</th>
                </tr>
              </thead>
              <tbody>
                {{ $table }}
              </tbody>
            </table>
            <hr>
            <div class="text-center">
              {{ $render }}
            </div>
          </div>
          <div class="panel-footer">
              <a href="{{ route('blog')}}" class="btn btn-sm btn-default">Volver al inicio</a>
          </div>
        </div>
    </div>
  </div>
</div>
