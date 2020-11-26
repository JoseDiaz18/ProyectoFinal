<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Descuento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor_descuento', 'Valor Descuento:') !!}
    {!! Form::number('valor_descuento', null, ['class' => 'form-control']) !!}
</div>

<!-- Id User Restaurante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_user_restaurante', 'Id User Restaurante:') !!}
    {!! Form::number('id_user_restaurante', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Menu Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_menu', 'Id Menu:') !!}
    {!! Form::number('id_menu', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('promociones.index') }}" class="btn btn-default">Cancel</a>
</div>
