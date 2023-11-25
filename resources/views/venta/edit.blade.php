<form action="{{ url('/venta/'.$venta->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH') }}
    @include('venta.form',['modo'=>'Editar']); 
</form>
