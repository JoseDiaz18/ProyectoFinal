<!-- Nombre Plato Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_plato', 'Nombre Plato:') !!}
    {!! Form::text('nombre_plato', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Recomendaciones Field -->
<div class="form-group col-sm-6">
    {!! Form::label('recomendaciones', 'Recomendaciones:') !!}
    {!! Form::text('recomendaciones', null, ['class' => 'form-control']) !!}
</div>

<!-- Calificacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('calificacion', 'Calificacion:') !!}
    {!! Form::text('calificacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Menu Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_menu', 'Id Menu:') !!}
    {!! Form::text('id_menu', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('favoritos.index') }}" class="btn btn-default">Cancel</a>
</div>
