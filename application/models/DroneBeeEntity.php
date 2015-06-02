<?php
require_once 'AbstractBeeEntity.php';

/**
 * Class DroneBeeEntity
 */
class DroneBeeEntity extends AbstractBeeEntity
{
    /* @var int */
    protected $hit_points = 50;

    /* @var int */
    protected $deduct_on_hit = 18;

    /* @var string */
    protected $name = 'Drone';
}
