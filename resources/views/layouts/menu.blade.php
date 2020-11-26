<li>
    <a href="{{ url('/') }}"><i class="fa fa-edit"></i><span>Inicio</span></a>
</li>
<li class="{{ Request::is('home*') ? 'active' : '' }}">
    <a href="{{ url('home') }}"><i class="fa fa-edit"></i><span>Dashboard</span></a>
</li>
<li class="{{ Request::is('restaurants*') ? 'active' : '' }}">
    <a href="{{ route('restaurants.index') }}"><i class="fa fa-edit"></i><span>Restaurants</span></a>
</li>
<li class="{{ Request::is('menus*') ? 'active' : '' }}">
    <a href="{{ route('menus.index') }}"><i class="fa fa-edit"></i><span>Menus</span></a>
</li>

<li class="{{ Request::is('favoritos*') ? 'active' : '' }}">
    <a href="{{ route('favoritos.index') }}"><i class="fa fa-edit"></i><span>Favoritos</span></a>
</li>

<li class="{{ Request::is('especialidads*') ? 'active' : '' }}">
    <a href="{{ route('especialidads.index') }}"><i class="fa fa-edit"></i><span>Especialidads</span></a>
</li>

<li class="{{ Request::is('promociones*') ? 'active' : '' }}">
    <a href="{{ route('promociones.index') }}"><i class="fa fa-edit"></i><span>Promociones</span></a>
</li>

<li class="{{ Request::is('reseñas*') ? 'active' : '' }}">
    <a href="{{ route('reseñas.index') }}"><i class="fa fa-edit"></i><span>Reseñas</span></a>
</li>

<li class="{{ Request::is('ventas*') ? 'active' : '' }}">
    <a href="{{ route('ventas.index') }}"><i class="fa fa-edit"></i><span>Ventas</span></a>
</li>

