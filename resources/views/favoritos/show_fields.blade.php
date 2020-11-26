<!-- Id Field -->
<div class="form-group" style="padding: .75rem;">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $favoritos->id }}</p>
</div>

<!-- Nombre Plato Field -->
<div class="form-group" style="padding: .75rem;">
    {!! Form::label('nombre_plato', 'Nombre Plato:') !!}
    <p>{{ $favoritos->nombre_plato }}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group" style="padding: .75rem;">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{{ $favoritos->descripcion }}</p>
</div>

<!-- Recomendaciones Field -->
<div class="form-group" style="padding: .75rem;">
    {!! Form::label('recomendaciones', 'Recomendaciones:') !!}
    <p>{{ $favoritos->recomendaciones }}</p>
</div>

<!-- Calificacion Field -->
<div class="form-group" style="padding: .75rem;">
    {!! Form::label('calificacion', 'Calificacion:') !!}
    <p>{{ $favoritos->calificacion }}</p>
</div>

<!-- Id Menu Field -->
<div class="form-group" style="padding: .75rem;">
    {!! Form::label('id_menu', 'Id Menu:') !!}
    <p>{{ $favoritos->id_menu }}</p>
</div>

<!-- Created At Field -->
<div class="form-group" style="padding: .75rem;">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $favoritos->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group" style="padding: .75rem;">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $favoritos->updated_at }}</p>
</div>

