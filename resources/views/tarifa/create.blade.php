@extends ('layouts.layout')
@section ('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Nueva Tarifa</h3>
        @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        {!!Form::open(array('url'=>'tarifa','method'=>'POST','autocomplete'=>'off'))!!}
        {{Form::token()}}
        <div class="form-group">
            <label for="descripcion">Tipo Vehiculo</label>
            <select name="role_id" id="role_id" class="form-control selectpicker" data-live-search="true" required>
                <option value="">SELECCIONE EL TIPO DE VEHÍCULO:</option>
                @foreach($tipo_vehiculo as $tipov)
                <option value="{{$tipov->id}}">{{ $tipov->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="descripcion">Valor</label>
            <input type="text" name="tipo" class="form-control" placeholder="Valor Hora...">
        </div>
        <div class="form-group">
            <label for="descripcion">Estado</label>
            <input type="text" name="Estado" class="form-control" placeholder="Estado 1.Activo 0.Inactivo">
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Guardar</button>
            <button class="btn btn-danger" type="reset">Cancelar</button>
        </div>
        {!!Form::close()!!}
    </div>
</div>
@endsection