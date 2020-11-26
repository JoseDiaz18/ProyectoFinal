<!-- Detalles Field -->
<div class="form-group col-sm-6">
    {!! Form::label('detalles', 'Detalles:') !!}
    {!! Form::text('detalles', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Restaurant Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_restaurant', 'Id Restaurant:') !!}
    {!! Form::number('id_restaurant', null, ['class' => 'form-control']) !!}
</div>

<!-- Id User Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_user', 'Id User:') !!}
    {!! Form::number('id_user', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('reseñas.index') }}" class="btn btn-default">Cancel</a>
</div>
