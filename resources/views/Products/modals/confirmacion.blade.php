<div class="modal fade" id="destroyProduct-{{ $product->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Ediatar Producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </button>
            </div>
            <h1>Seguro?</h1>
            <div class="justify-center">
                <span><h5>Si elimina este producto se vera afectado a la hora de hacer una venta, ¿seguro desea eliminar este producto?</h5><span>
            </div>


            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                    aria-label="Close">Cancelar</button>
                <form action="{{ route('products.destroy', $product->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-icon btn-danger" title="Eliminar producto">
                        <i class="bi bi-trash"></i>Eliminar
                    </button>
                </form>


            </div>

        </div>
    </div>
</div>
