<div class="d-flex justify-content-center">
    <div class="pe-1">
        <button type="button" class="btn btn-primary"
            data-bs-toggle="modal"
            data-bs-target="#membershiptype-{{ $membershipType->id }}"
            aria-label="Editar membresia">

            <i class="bi bi-pencil"></i>
        </button>

        @include('Membership.modals.edit')
    </div>

    <div>
        <form action="{{ route('Membership.destroy', $membershipType->id) }}"
            method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger"
                aria-label="Eliminar membresia">
                <i class="bi bi-trash"></i>
            </button>
        </form>
    </div>
</div>
