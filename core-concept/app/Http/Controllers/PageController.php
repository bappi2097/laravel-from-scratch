<?php

namespace App\Http\Controllers;

use App\Example;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(Example $example)
    {
        ddd($example);
    }
}
