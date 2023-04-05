

## Migraciones

```php
$table->id() # Para poner un id
$table->string() # Para poner titulos o frases cortas
$table->text() # Para poner descripciones un poco mas largas

$table->unsignedInteger() # Para crear una foreign Key
$table->foreign()->references()->on()
```


## Encriptar contraseña

```php
bcrypt($data['password']) o bcrypt($request->password)
```

Prueba