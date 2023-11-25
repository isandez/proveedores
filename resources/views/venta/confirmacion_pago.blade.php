<!-- resources/views/venta/confirmacion_pago.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>¡Pago exitoso!</h1>
        <p>Gracias por su pago. Su transacción ha sido procesada con éxito para la venta con ID:
             {{ $venta->id }}.</p>
        
    </div>
@endsection
