### Cors.php
```php
<?php

  

return [
    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */
    'paths' => ['api/*', 'sanctum/csrf-cookie', '*'], # Se habilita todos los paths para que se escuche la nueva ruta personalizada
    'allowed_methods' => ['*'],
    'allowed_origins' => ['http://localhost:5173'], # Se habilita el nuevo puerto para que sea escuchado en la ejecución de react 
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => false,
];
```