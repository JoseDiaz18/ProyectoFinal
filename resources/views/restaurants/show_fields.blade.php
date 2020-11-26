<!-- Id Field -->
<div class="form-group" style="padding: .75rem;">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $restaurants->id }}</p>
</div>

<!-- Nit Field -->
<!-- <div class="form-group" style="padding: .75rem;"> -->
<div class="form-group" style="padding: .75rem;">
    {!! Form::label('nit', 'Nit:') !!}
    <p>{{ $restaurants->nit }}</p>
</div>

<!-- Nombre Field -->
<div class="form-group" style="padding: .75rem;">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $restaurants->nombre }}</p>
</div>

<!-- Direccion Field -->
<div class="form-group" style="padding: .75rem;">
    {!! Form::label('direccion', 'Direccion:') !!}
    <p>{{ $restaurants->direccion }}</p>
</div>

<!-- Telefono Field -->
<div class="form-group" style="padding: .75rem;">
    {!! Form::label('telefono', 'Telefono:') !!}
    <p>{{ $restaurants->telefono }}</p>
</div>

<!-- Correo Field -->
<div class="form-group" style="padding: .75rem;">
    {!! Form::label('correo', 'Correo:') !!}
    <p>{{ $restaurants->correo }}</p>
</div>

<!-- Created At Field -->
<div class="form-group" style="padding: .75rem;">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $restaurants->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group" style="padding: .75rem;">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $restaurants->updated_at }}</p>
</div>

