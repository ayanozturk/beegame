<?php

namespace BeeGame\Entity;

/**
 * Class Bee
 * @package BeeGame\Entity
 */
class QueenBee extends Bee
{
    /* @var int */
    protected $hitPoints = 100;

    /* @var int */
    protected $deductOnHit = 7;

    /* @var string */
    protected $name = 'Queen';
}
