
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

```bash
php artisan make:seeder ProductosSeeder
```

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


## Poner en un prefijo de versión
```php
Route::group(['prefix => v1'], function() {
	Route::apiResource('skills', Controller::class);
});
```


New token
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
