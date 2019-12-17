1) HowTo make middleware
    ->php artisan make:middleware <middlewarename>

    then you have to register the middleware
    in the app.http.Kernel.php
    this is call the route middleware

2) to make a controller this command is used

    => you dont have to register this
    =>php artisan make:controller HelloController

    Router::get('<url>',ControllerClass@method);

    why it is necessary for sending to the controller??
    you can fetch the database information
    and send send it to the controller with this

