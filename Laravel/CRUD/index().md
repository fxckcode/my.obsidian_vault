`funcion encargada de recibir predeterminadamente las peticiones GET que se le hagan a la api cuando se quiere mostrar todo y no solo un contenido en especifico`

### Ejemplo:
```php
use App\Models\Lugares; # Se importa primero el modelo a utilizar
public function index() 
{
	$lugares = Lugares::all() # Se guarda en una variable todos los lugares
	return response()->json($lugares, 200) # Se retorna un formato json como respuesta
}
```