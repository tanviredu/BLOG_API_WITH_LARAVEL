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

3) more route with laravel
    to do that lest go to the main default page and 
    make a route for the total link

    there are three different way to naviage from page to page
    which is also the route
    1)url
    2)URL::to
    3)route('<name>')    ## this is named route
