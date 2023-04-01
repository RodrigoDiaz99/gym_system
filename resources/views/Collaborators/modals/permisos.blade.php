<div class="modal fade" id="permisosCollaborator-{{ $collaborator->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('asginarPermisos') }}" method="POST" id="product_form">
                <div class="modal-body">
                    @csrf



                        <ul style="text-align: left;" class="list-group">
                            @foreach ($permissions as $permission)
                                <li class="list-group-item">
                                    <label>
                                        <div class="form-check">
                                            <input type="number" hidden id="id_user" name="id_user" value="{{$collaborator->id}}">
                                        <input type="checkbox" name="permissions[]" value="{{ $permission->id }}" id="permissions">
                                        {{ $permission->sub_name }}
                                    </div>
                                    </label>
                                </li>
                            @endforeach
                            </ul>





                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                        aria-label="Close">Cancelar</button>
                    <button type="submit" class="btn btn-success"><strong>GUARDAR</strong></button>
                </div>
            </form>
        </div>

    </div>
</div>
