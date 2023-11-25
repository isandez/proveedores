<label for="Nombres">Nombres:</label>
<input type="text" value="{{ $proveedor->Nombres ?? '' }}" name="Nombres" id="Nombres">
<br>
<label for="Apellidos">Apellidos:</label>
<input type="text" value="{{ $proveedor->Apellidos ?? '' }}" name="Apellidos" id="Apellidos">
<br>
<label for="Telefono">Teléfono:</label>
<input type="tel" value="{{ $proveedor->Telefono ?? '' }}" name="Telefono" id="Telefono" pattern="[0-9]{10}">
<br>
<label for="Apellidos">Direccion:</label>
<input type="text" value="{{ $proveedor->Direccion ?? '' }}" name="Direccion" id="Direccion">
<br>
<label for="Foto">Foto:</label>
<input type="file" name="Foto" id="Foto">
<br>
<input type="submit" value="{{$modo}} Datos"  onclick="return confirm('¿Estas seguro de Guardar al proveedor?')" 
value="Crear Proveedor">
<br>
<a href="{{ url('proveedor/') }}">Regresar</a>