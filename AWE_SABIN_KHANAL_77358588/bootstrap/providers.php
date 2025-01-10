<?php
//file Returns an array of service providers used by apllication
return [
    App\Providers\AppServiceProvider::class,  //app run smoothly and registers aplication services
    App\Providers\FortifyServiceProvider::class, //Keeps our signin and signup safe and registers laravel fority services.
    App\Providers\JetstreamServiceProvider::class, //Main thing keep track of our special things and register jetstream services
];
