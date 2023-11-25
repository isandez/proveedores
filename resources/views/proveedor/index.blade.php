@extends('create')
@section('provedores')
<table class="table table-light">
    <thead class="thead-light">
        <th>Foto</th>
        <th>ID</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Telefono</th>
        <th>Direccion</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        @foreach($proveedor as $proveedor)
        <tr>
            <td>
                <img src="{{ asset('storage').'/'.$proveedor->Foto }}" width="100" alt="">
            </td>
            <td>{{$proveedor->id}}</td>
            <td>{{$proveedor->Nombres}}</td>
            <td>{{$proveedor->Apellidos}}</td>
            <td>{{$proveedor->Telefono}}</td>
            <td>{{$proveedor->Direccion}}</td>
            <td> <a href="{{ url ('/proveedor/'.$proveedor->id.'/edit') }}">
                Editar
            </a> | 
                <form action="{{ url('/proveedor/'.$proveedor->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" onclick="return confirm('¿Estas seguro de borrar al proveedor?')" value="Borrar">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<br>
<a href="{{ url('proveedor/create') }}">Registrar Nuevo Proveedor</a>
@endsection