<?php

use Illuminate\Foundation\Application; //Import foundation application class
use Illuminate\Foundation\Configuration\Exceptions; //Import the exception configuration handling
use Illuminate\Foundation\Configuration\Middleware; //Import the middleware configuration handling
//ALL Above helps our app to get ready to do its work
return Application::configure(basePath: dirname(__DIR__)) //arange the application using the the parent directry(book)
    ->withRouting(  //here is the path for all the wep pages people see in the browser
        web: __DIR__.'/../routes/web.php', // talk to computer or define the path to web route file
        api: __DIR__.'/../routes/api.php', //Command to our app or define the path  for api route file 
        commands: __DIR__.'/../routes/console.php', //define the path to command file
        health: '/up', //define the health check endpoint
    )
    ->withMiddleware(function (Middleware $middleware) {
        // register your application milddlware here
    })
    ->withExceptions(function (Exceptions $exceptions) {
        // register your custom exceptions handlers here
    })->create();
    // create and return the configuration apllication case or example or instance
