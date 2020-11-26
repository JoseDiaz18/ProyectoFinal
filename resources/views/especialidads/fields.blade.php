<!-- Detalles Field -->
<div class="form-group col-sm-6">
    {!! Form::label('detalles', 'Detalles:') !!}
    {!! Form::text('detalles', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Menu Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_menu', 'Id Menu:') !!}
    {!! Form::text('id_menu', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('especialidads.index') }}" class="btn btn-default">Cancel</a>
</div>
