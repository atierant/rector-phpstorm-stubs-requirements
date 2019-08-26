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
        $this->runWithDefault([]);
        $card = self::runWithStaticDefault([]);
    }

    public function runWithDefault($items = [])
    {
        return $items;
    }

    public function runStaticWithDefault($cards = [])
    {
        return $cards;
    }
}
