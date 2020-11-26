<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Detalles Field -->
<div class="form-group col-sm-6">
    {!! Form::label('detalles', 'Detalles:') !!}
    {!! Form::text('detalles', null, ['class' => 'form-control']) !!}
</div>

<!-- Calificacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('calificacion', 'Calificacion:') !!}
    {!! Form::number('calificacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor', 'Valor:') !!}
    {!! Form::number('valor', null, ['class' => 'form-control']) !!}
</div>

<!-- Promociones Field -->
<div class="form-group col-sm-6">
    {!! Form::label('promociones', 'Promociones:') !!}
    {!! Form::text('promociones', null, ['class' => 'form-control']) !!}
</div>

<!-- Id User Restaurant Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_user_restaurant', 'Id User Restaurant:') !!}
    {!! Form::text('id_user_restaurant', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('menus.index') }}" class="btn btn-default">Cancel</a>
</div>
