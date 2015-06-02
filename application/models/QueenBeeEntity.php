<?php
require_once 'AbstractBeeEntity.php';

/**
 * Class BeeEntity
 */
class QueenBeeEntity extends AbstractBeeEntity
{
    /* @var int */
    protected $hit_points = 100;

    /* @var int */
    protected $deduct_on_hit = 7;

    /* @var string */
    protected $name = 'Queen';
}
