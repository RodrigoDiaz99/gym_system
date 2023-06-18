@extends('layouts.app')

@section('content')
    <div class="page-heading">
        <h3>Bienvenido {{Auth()->user()->name}}</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-9">
                <div class="row">

                    <div class="alert alert-primary" role="alert">
                       Bienvenido!!
                      </div>

                      <div class="alert alert-info" role="alert">
                       En el menú de la izquierda podras ver lo que puedes usar en el sistema.
                      </div>

                </div>


            </div>

        </section>
    </div>
@endsection
