<div class="modal fade" id="permisosCollaborator-{{ $collaborator->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="form-group">
                        <label>Permisos:</label><br>
                        <div class="row">
                            {{$permiso=""}}
                            @foreach ($permissions as $permission)
                                <div class="col-md-6">
                                    @switch($permission->name)
                                        @case('venta')
                                        <label>{{$permiso ="Vender"}}</label>
                                        @break

                                        @case("corte_caja")
                                        <label>{{$permiso="Bitacora Corte de Caja"}}</label>
                                        @break

                                        @case('inventario')
                                        <label> {{$permiso = "Inventario"}}</label>
                                        @break

                                        @case('clientes')
                                        <label> {{$permiso = "Clientes"}}</label>
                                        @break

                                        @case('colaboradores')
                                        <label> {{$permiso = "Colaboradores"}}</label>
                                        @break

                                        @case('expedientes')
                                        <label> {{$permiso = "Expediente"}}</label>
                                        @break

                                        @case('crear')
                                        <label> {{$permiso ="Crear Registros"}}</label>
                                        @break

                                        @case('eliminar')
                                        <label>  {{$permiso = "Eliminar Registros"}}</label>
                                        @break

                                        @case('editar')
                                        {{$permiso ="Editar Registros"}}</label>
                                        @break

                                        @case('restaurar')
                                        <label>  {{$permiso = "Restaurar Registros"}}</label>
                                        @break

                                        @case('estadisticas')
                                        <label>  {{$permiso = "Estadisticas"}}</label>
                                        @break

                                        @case('productos_vendidos')
                                        <label>  {{$permiso ="Productos Vendidos"}}</label>
                                        @break

                                        @case('membresias_vendidas')
                                        <label> {{$permiso ="Membresias Vendidas"}}</label>
                                        @break

                                        @case('mayores_ventas')
                                        <label>  {{$permiso ="Mayores Ventas"}}</label>
                                        @break

                                        @case('membresias')
                                        <label>  {{$permiso = "Membresias"}}</label>
                                        @break

                                        @case('ver_membresias')
                                        <label> {{$permiso = "Ver Membresias"}}</label>
                                        @break

                                        @case('tipo_membresias')
                                        <label> {{$permiso = "Tipo Membresias"}}</label>
                                        @break

                                        @case('productos')
                                        <label> {{$permiso ="Productos"}}</label>
                                        @break

                                        @case('ver_productos')
                                        <label> {{$permiso ="Ver Productos"}}</label>
                                        @break

                                        @case('categorias')
                                        <label> {{$permiso ="Categorias"}}</label>
                                        @break

                                        @case('unidades')
                                        <label>  {{$permiso ="Unidades de medida"}}</label>
                                        @break

                                        @case('proveedores')
                                        <label>  {{$permiso ="Proveedores"}}</label>
                                        @break

                                        @case('bitacoras')
                                        <label>{{$permiso ="Bitacoras"}}</label>
                                        @break

                                        @case('bitacoras_acceso')
                                        <label>{{$permiso ="Bitacora de Accesos"}}</label>
                                        @break

                                        @case('bitacoras_cancelacion')
                                        <label>{{$permiso ="Bitacora de Cancelaciones"}}</label>
                                        @break
                                        @case('bitacoras_ventas')
                                        <label>{{$permiso ="Bitacora de Ventas"}}</label>
                                        @break
                                    @endswitch

                                    <input type="checkbox" name="permissions[]" value="{{ $permission->id }}" data-nombre="{{ $permiso }}" id="permisoChecbox" name="permisoChecbox">
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>

    </div>
</div>
