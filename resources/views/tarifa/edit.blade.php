@extends ('layouts.layout')
@section ('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Editar vehículo</h3>

        <form method="POST" action="{{route('vehiculo.update',$vehiculo->id)}}" role="form">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="PATCH">
            <div class="form-group">
                <label for="nombre">Placa</label>
                <input type="text" name="placa" class="form-control" placeholder="Placa..." value="{{$vehiculo->placa}}">
            </div>
            <div class="form-group">
                <label for="descripcion">Tipo</label>
                <input type="text" name="tipo" class="form-control" placeholder="Tipo..." value="{{$vehiculo->tipo}}">
            </div>
            <div class="form-group">
                <label for="descripcion">Modelo</label>
                <input type="text" name="modelo" class="form-control" placeholder="Modelo..." value="{{$vehiculo->modelo}}">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Editar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
        </form>
    </div>
</div>
@endsection