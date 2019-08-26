<?php

namespace MyProject;

use LogicException;

/**
 * Class Inspect
 * @package MyProject
 */
class Inspect
{
    public function test()
    {
        throw new LogicException();
    }

    public function run()
    {
        return true && 5 === 1;
     }
}
