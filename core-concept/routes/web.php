<?php

use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view('welcome');
});

Route::get('/service-container', function () {
    $container = new \App\Container();
    $container->bind('example', function () {
        return new \App\Example();
    });

    $example = $container->resolve('example');
    $example->go();
    ddd($example);
});

// app()->bind('example', function () {
//     // $foo = config("services.foo");
//     // return new \App\Example($foo);
//     return new \App\Example();
// });
// Route::get('service-provider', function () {
//     // $example = resolve('example');
//     // $example = resolve(\App\Example::class);
//     $example = app()->make(\App\Example::class);
//     ddd($example);
// });
Route::get('service-provider', 'PageController@home');
