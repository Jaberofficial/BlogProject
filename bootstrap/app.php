```php
->withMiddleware(function (Middleware $middleware) {
    $middleware->add('web', \App\Http\Middleware\VerifyCsrfToken::class);
    $middleware->add('web', \Illuminate\Session\Middleware\AuthenticateSession::class);
    $middleware->add('web', \Illuminate\View\Middleware\ShareErrorsFromSession::class);
    $middleware->add('web', \App\Http\Middleware\TrimStrings::class);
    $middleware->add('web', \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class);
})
->withExceptions(function (Exceptions $exceptions) {
    $exceptions->report(function (Throwable $e) {
        if ($e instanceof \Illuminate\Database\Eloquent\ModelNotFoundException) {
            return response()->view('errors.404', [], 404);
        }
    });
})
```ADME.md<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
