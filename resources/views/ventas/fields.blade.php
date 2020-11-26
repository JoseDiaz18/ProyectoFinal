<!-- Hora Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hora', 'Hora:') !!}
    {!! Form::text('hora', null, ['class' => 'form-control','id'=>'hora']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#hora').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Id User Restaurant Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_user_restaurant', 'Id User Restaurant:') !!}
    {!! Form::number('id_user_restaurant', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Menu Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_menu', 'Id Menu:') !!}
    {!! Form::number('id_menu', null, ['class' => 'form-control']) !!}
</div>

<!-- Id User Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_user', 'Id User:') !!}
    {!! Form::number('id_user', null, ['class' => 'form-control']) !!}
</div>

<!-- Promociones Field -->
<div class="form-group col-sm-6">
    {!! Form::label('promociones', 'Promociones:') !!}
    {!! Form::text('promociones', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('ventas.index') }}" class="btn btn-default">Cancel</a>
</div>
