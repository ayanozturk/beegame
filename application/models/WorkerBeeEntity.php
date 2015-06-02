<?php
require_once 'AbstractBeeEntity.php';

/**
 * Class WorkerBeeEntity
 */
class WorkerBeeEntity extends AbstractBeeEntity
{
    /* @var int */
    protected $hit_points = 75;

    /* @var int */
    protected $deduct_on_hit = 12;

    /* @var string */
    protected $name = 'Worker';
}
