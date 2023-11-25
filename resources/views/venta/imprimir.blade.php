
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Recibo de Venta</h1>
       
        <p>ID de Venta: {{ $venta->id }}</p>
        <p>Monto Total: ${{ $venta->monto_total }}</p>
        
    </div>
@endsection
