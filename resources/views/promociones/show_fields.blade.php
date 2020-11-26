<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $promociones->id }}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{{ $promociones->descripcion }}</p>
</div>

<!-- Valor Descuento Field -->
<div class="form-group">
    {!! Form::label('valor_descuento', 'Valor Descuento:') !!}
    <p>{{ $promociones->valor_descuento }}</p>
</div>

<!-- Id User Restaurante Field -->
<div class="form-group">
    {!! Form::label('id_user_restaurante', 'Id User Restaurante:') !!}
    <p>{{ $promociones->id_user_restaurante }}</p>
</div>

<!-- Id Menu Field -->
<div class="form-group">
    {!! Form::label('id_menu', 'Id Menu:') !!}
    <p>{{ $promociones->id_menu }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $promociones->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $promociones->updated_at }}</p>
</div>

