<?php

namespace BeeGame;

use Slim\Container;

/**
 * Class Action
 * @package BeeGame
 */
abstract class Action
{
    /* @var Container */
    protected $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }
}
