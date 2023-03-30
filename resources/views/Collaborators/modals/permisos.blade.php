<style>
    #permissions>ul>li>ul {
        display: none;
    }

    #permissions>ul>li>input[type="checkbox"]+label::before {
        content: '+';
        display: inline-block;
        margin-right: 5px;
    }

    #permissions>ul>li>input[type="checkbox"]:checked+label::before {
        content: '-';
    }

    #permissions>ul>li>input[type="checkbox"]:checked+label+ul {
        display: block;
    }
</style>
<div class="modal fade" id="permisosCollaborator-{{ $collaborator->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="permissions">
                    <ul class="list-group">
                        @foreach ($permissions as $permission)
                            <li class="list-group-item">
                                <input type="checkbox" id="category{{ $permission->numero_categoria }}" class="category"
                                    name="categories[]" value="{{ $permission->numero_categoria }}" />
                                <label
                                    for="category{{ $permission->numero_categoria }}">{{ $permission->categoria }}</label>
                                @if ($permission->nombres)
                                    <ul class="list-group ">
                                        @foreach (explode(',', $permission->nombres) as $name)
                                            <li class="list-group-item list-group-item-secondary">
                                                <input type="checkbox" id="{{ $name }}" class="permission"
                                                    name="permissions[]" value="{{ $name }}" />
                                                <label
                                                    for="{{ $permission->sub_name }}">{{ $permission }}</label>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>

    </div>
</div>
@section('scripts')
    <script>
        var permissions = {!! $permissions !!};
    </script>

    <script src="{{ asset('js_modulos/permisos.js') }}"></script>
@endsection
