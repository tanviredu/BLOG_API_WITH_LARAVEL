1) HowTo make middleware
    ->php artisan make:middleware <middlewarename>

    then you have to register the middleware
    in the app.http.Kernel.php
    this is call the route middleware