<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $container = new \App\Container();
    $container->bind('example', function () {
        return new \App\Example();
    });

    $example = $container->resolve('example');
    $example->go();
    ddd($example);
});
