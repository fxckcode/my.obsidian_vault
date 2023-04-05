

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


## Crear un Seeder con datos falsos

```php
# ProductSeeder | Ejemplo

public function run()
{
	DB::table('products')->insert([
		'name' => 'Teléfono',
		'description' => 'Mobile Phone Apple'
	]);
}

# DatabaseSeeder
public function run()
{
	$this->call([
		ProductSeeder::class,
	])
}
```

Crear la migración
 ```bash
php artisan db:seed
```
