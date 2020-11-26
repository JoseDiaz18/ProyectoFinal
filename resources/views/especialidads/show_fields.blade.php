<!-- Id Field -->
<div class="form-group" style="padding: .75rem;">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $especialidad->id }}</p>
</div>

<!-- Detalles Field -->
<div class="form-group" style="padding: .75rem;">
    {!! Form::label('detalles', 'Detalles:') !!}
    <p>{{ $especialidad->detalles }}</p>
</div>

<!-- Id Menu Field -->
<div class="form-group" style="padding: .75rem;">
    {!! Form::label('id_menu', 'Id Menu:') !!}
    <p>{{ $especialidad->id_menu }}</p>
</div>

<!-- Created At Field -->
<div class="form-group" style="padding: .75rem;">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $especialidad->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group" style="padding: .75rem;">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $especialidad->updated_at }}</p>
</div>

