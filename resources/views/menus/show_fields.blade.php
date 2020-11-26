<!-- Id Field -->
<div class="form-group" style="padding: .75rem;">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $menu->id }}</p>
</div>

<!-- Nombre Field -->
<div class="form-group" style="padding: .75rem;">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $menu->nombre }}</p>
</div>

<!-- Detalles Field -->
<div class="form-group" style="padding: .75rem;">
    {!! Form::label('detalles', 'Detalles:') !!}
    <p>{{ $menu->detalles }}</p>
</div>

<!-- Calificacion Field -->
<div class="form-group" style="padding: .75rem;">
    {!! Form::label('calificacion', 'Calificacion:') !!}
    <p>{{ $menu->calificacion }}</p>
</div>

<!-- Valor Field -->
<div class="form-group" style="padding: .75rem;">
    {!! Form::label('valor', 'Valor:') !!}
    <p>{{ $menu->valor }}</p>
</div>

<!-- Promociones Field -->
<div class="form-group" style="padding: .75rem;">
    {!! Form::label('promociones', 'Promociones:') !!}
    <p>{{ $menu->promociones }}</p>
</div>

<!-- Id User Restaurant Field -->
<div class="form-group" style="padding: .75rem;">
    {!! Form::label('id_user_restaurant', 'Id User Restaurant:') !!}
    <p>{{ $menu->id_user_restaurant }}</p>
</div>

<!-- Created At Field -->
<div class="form-group" style="padding: .75rem;">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $menu->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group" style="padding: .75rem;">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $menu->updated_at }}</p>
</div>

