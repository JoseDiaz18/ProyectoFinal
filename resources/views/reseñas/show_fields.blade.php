<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $reseñas->id }}</p>
</div>

<!-- Detalles Field -->
<div class="form-group">
    {!! Form::label('detalles', 'Detalles:') !!}
    <p>{{ $reseñas->detalles }}</p>
</div>

<!-- Id Restaurant Field -->
<div class="form-group">
    {!! Form::label('id_restaurant', 'Id Restaurant:') !!}
    <p>{{ $reseñas->id_restaurant }}</p>
</div>

<!-- Id User Field -->
<div class="form-group">
    {!! Form::label('id_user', 'Id User:') !!}
    <p>{{ $reseñas->id_user }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $reseñas->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $reseñas->updated_at }}</p>
</div>

