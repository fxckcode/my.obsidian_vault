- No poner constructores en los controladores ya que se puede exportar directamente desde el modelo la clase completa, solo usar:
```php
require_once("modelo/Modelo.php")
```

- Crear solo las tres funciones en el modelo:
```php
public function mostrar($tabla, $condicion) 
{
	$resultado = $this->db->query("SELECT * FROM ".$tabla." WHERE ".$condicion);
	return $resultado->fetchAll(PDO::FETCH_ASSOC);
}

public function mostrarPersonalizado($sql)
{
	$resultado = $this->db->query($sql);
	return $resultado->fetchAll(PDO::FETCH_ASSOC);
}

public function all($sql) # Funcion para solo validar verdadero o falso la construcción de la consulta, como eliminar, actualizar y autenticar 
{
	$resultado = $this->db->query($sql);
	if ($resultado) {
		return true;
	} else {
		return false;
	}
}
```

- Consultas básicas
```SQL
-- Sin JOIN
SELECT * FROM <TABLA>

-- Con JOIN
SELECT <LO QUE SE QUIERA MOSTRAR> FROM <TABLA> <PREFIJO> JOIN <TABLA EXTERNA> ON <CONDICION>

INSERT INTO <TABLA>(CAMPOS) VALUES (DATA)
UPDATE <TABLA> SET (DATA) WHERE CONDICION
DELETE FROM <TABLA> WHERE CONDICION
```
