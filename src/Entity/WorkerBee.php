<?php

namespace BeeGame\Entity;

/**
 * Class WorkerBee
 * @package BeeGame\Entity
 */
class WorkerBee extends Bee
{
    /* @var int */
    protected $hitPoints = 75;

    /* @var int */
    protected $deductOnHit = 12;

    /* @var string */
    protected $name = 'Worker';
}
