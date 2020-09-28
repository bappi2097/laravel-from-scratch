<?php

namespace App;

class Example
{
    protected $collaborator;
    // protected $foo;

    // public function __construct($foo)
    // {
    //     $this->foo = $foo;
    // }

    public function __construct(Collaborator $collaborator)
    {
        $this->collaborator = $collaborator;
    }
    public function go()
    {
        dump("it works");
    }
}
