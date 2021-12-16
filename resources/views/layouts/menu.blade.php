<li class="{{ Request::is('sales*') ? 'active' : '' }}">
    <a href="{!! route('sales.index') !!}"><i class="fa fa-shopping-cart"></i><span>Ventas</span></a>
</li>

<li class="{{ Request::is('products*') ? 'active' : '' }}">
    <a href="{!! route('products.index') !!}"><i class="fa fa-list"></i><span>Productos</span></a>
</li>

<li class="{{ Request::is('clients*') ? 'active' : '' }}">
    <a href="{!! route('clients.index') !!}"><i class="fa fa-users"></i><span>Empleados</span></a>
</li>

@if(\App\Patrones\Permiso::esAdministrador())
    <li class="{{ Request::is('users*') ? 'active' : '' }}">
        <a href="{!! route('users.index') !!}"><i class="fa fa-user"></i><span>Usuarios</span></a>
    </li>

<li class="{{ Request::is('reporte*') ? 'active' : '' }}">

</li>
@endif
