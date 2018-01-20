<?php

namespace BeeGame\Entity;

/**
 * Class DroneBee
 * @package BeeGame\Entity
 */
class DroneBee extends Bee
{
    /* @var int */
    protected $hitPoints = 50;

    /* @var int */
    protected $deductOnHit = 18;

    /* @var string */
    protected $name = 'Drone';
}
