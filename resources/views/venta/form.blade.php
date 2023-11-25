<label for="Fecha">Fecha:</label>
<input type="date" value="{{ $venta->Fecha ?? '' }}" name="Fecha" id="Fecha">
<br>
<label for="Cliente"> Cliente:</label>
<input type="text" value="{{ $venta->Cliente ?? '' }}" name="Cliente" id="Cliente">
<br>
<label for="Montototal">Monto total: $</label>
<input type="number" value="{{ floatval(str_replace(',', '', $venta->Montototal ?? '')) }}" name="Montototal" id="Montototal" required>


<br>
<label for="Vendedor">Vendedor:</label>
<input type="text" value="{{ $venta->Vendedor ?? '' }}" name="Vendedor" id="Vendedor">
<br>
<input type="submit"  onclick="return confirm('¿Estas Seguro de Guardar los Datos?')" 
value="{{$modo}} Datos">