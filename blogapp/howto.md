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

4) we will learn about template on the way

5) landling the static file
    first create a folder inside the 'public' directory
    then copy all your asset to the frontend css,js,img everythinh

    now for linking you link like that

    from this
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    to that
    <link href="{{asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


and you are good to go
and make a rouyte for the page