<form action="" method="post" enctype="multipart/form-data">

<label for="Nombre">Nombre:</label>
<input type="text" value="{{ $cliente->Nombre ?? '' }}" name="Nombre" id="Nombre">
<br>
<label for="Apellidos">Rol:</label>
<input type="text" value="{{ $cliente->Rol ?? '' }}" name="Rol" id="Rol">
<br>
<label for="Telefono">Teléfono:</label>
<input type="tel" value="{{ $cliente->Telefono ?? '' }}" name="Telefono" id="Telefono" pattern="[0-9]{10}">
<br>
<label for="Apellidos">Direccion:</label>
<input type="text" value="{{ $cliente->Direccion ?? '' }}" name="Direccion" id="Direccion">
<br>
<label for="Foto">Foto:</label>
<input type="file" name="Foto" id="Foto">
<br>
<input type="submit" value="{{$modo}} Datos"  onclick="return confirm('¿Estas seguro de Guardar al Cliente?')" 
value="Crear Cliente">
<br>
<a href="{{ url('cliente/') }}">Regresar</a>
</form>