@extends('layouts.app')

@section('template_title')
    {{ $venta->name ?? 'Show Venta' }}
@endsection

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Venta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ventas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cantidadventa:</strong>
                            {{ $venta->cantidadVenta }}
                        </div>
                        <div class="form-group">
                            <strong>Numventa:</strong>
                            {{ $venta->numVenta }}
                        </div>
                        <div class="form-group">
                            <strong>Producto Id:</strong>
                            {{ $venta->producto_id }}
                        </div>
                        <div class="form-group">
                            <strong>Referencia:</strong>
                            {{ $venta->referencia }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
