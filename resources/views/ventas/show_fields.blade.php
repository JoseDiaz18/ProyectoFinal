<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $ventas->id }}</p>
</div>

<!-- Hora Field -->
<div class="form-group">
    {!! Form::label('hora', 'Hora:') !!}
    <p>{{ $ventas->hora }}</p>
</div>

<!-- Id User Restaurant Field -->
<div class="form-group">
    {!! Form::label('id_user_restaurant', 'Id User Restaurant:') !!}
    <p>{{ $ventas->id_user_restaurant }}</p>
</div>

<!-- Id Menu Field -->
<div class="form-group">
    {!! Form::label('id_menu', 'Id Menu:') !!}
    <p>{{ $ventas->id_menu }}</p>
</div>

<!-- Id User Field -->
<div class="form-group">
    {!! Form::label('id_user', 'Id User:') !!}
    <p>{{ $ventas->id_user }}</p>
</div>

<!-- Promociones Field -->
<div class="form-group">
    {!! Form::label('promociones', 'Promociones:') !!}
    <p>{{ $ventas->promociones }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $ventas->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $ventas->updated_at }}</p>
</div>

