<div class="modal fade" id="editCollaborator-{{$collaborator->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Editar Colaborador</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </button>
            </div>

            <form action="{{ route('colaboradores.update',$collaborator->id) }}" method="POST">
                @method('put')
                <div class="modal-body">
                    @csrf
                    <div class="col-md-12">
                        <label for=""><b>Nombre Colaborador *</b> </label>
                        <div class="row">
                            <div class="col-md">
                                <label for=""> Nombre(s) *</label>
                                <div class="form-group">
                                    <div class="input-group input-group-alternative mb-4">
                                        <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                                        <input class="form-control" type="text" id="name" name="name"
                                            value="{{ old('name',$collaborator->name) }}">
                                        @error('name')
                                            <p class="error-message">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <label for="">Apellidos (*)</label>
                                <div class="form-group">
                                    <div class="input-group input-group-alternative mb-4">
                                        <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                                        <input class="form-control" type="text" id="surnames" name="surnames"
                                            value="{{ old('surnames',$collaborator->surnames) }}">
                                    </div>
                                    @error('surnames')
                                        <p class="error-message">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md">
                                <label for="">N&uacute;mero de Telefono *</label>
                                <div class="form-group">
                                    <div class="input-group input-group-alternative mb-4">
                                        <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                                        <input class="form-control" type="number" name="phone" id="phone"
                                            maxlength="10"
                                            oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                            min="0" value="{{ old('phone',$collaborator->phone) }}">
                                    </div>
                                    @error('phone')
                                        <p class="error-message">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md">
                                <label for="">Cargo *</label>
                                <div class="form-group">
                                    <div class="input-group input-group-alternative mb-4">
                                        <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                                        <input class="form-control" type="text" name="ocupation" id="ocupation"
                                            value="{{ old('ocupation',$collaborator->ocupation) }}">
                                    </div>
                                    @error('ocupation')
                                        <p class="error-message">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">

                        <div class="row">
                            <div class="col-md">
                                <label for="">Correo Electronico *</label>
                                <div class="form-group">
                                    <div class="input-group input-group-alternative mb-4">
                                        <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                                        <input class="form-control" type="text" id="email" name="email"
                                            value="{{ old('email',$collaborator->email) }}">

                                    </div>
                                    @error('email')
                                        <p class="error-message">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>


                        </div>
                    </div>




                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                        aria-label="Close">Cancelar</button>
                    <button type="submit" class="btn btn-warning"><strong>EDITAR</strong></button>
                </div>
            </form>
        </div>
    </div>
</div>
