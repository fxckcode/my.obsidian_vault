### Authenticate.php
```php
  protected function unauthenticated($request, array $guards)

    {

        throw new AuthenticationException(

            'Unauthenticated user', $guards, $this->redirectTo($request)

        );

    }
```

### AuthenticateSession.php
```php
 protected function logout($request)

    {

        $this->guard()->logoutCurrentDevice();

  

        $request->session()->flush();

  

        throw new AuthenticationException(

            'Unauthenticated user', [$this->auth->getDefaultDriver()], $this->redirectTo($request)

        );

    }
```

hola