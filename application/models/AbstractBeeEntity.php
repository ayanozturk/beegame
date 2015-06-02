<?php

class AbstractBeeEntity
{
    /* @var int */
    protected $hit_points = 0;

    /* @var int */
    protected $deduct_on_hit = 0;

    /* @var string */
    protected $name = 'Bee';

    /**
     * @return int
     */
    public function getHitPoints()
    {
        return $this->hit_points;
    }

    /**
     * @param int $hit_points
     * @return $this
     */
    public function setHitPoints($hit_points)
    {
        $this->hit_points = (int) $hit_points;
        return $this;
    }

    /**
     * @return int
     */
    public function getDeductOnHit()
    {
        return $this->deduct_on_hit;
    }

    /**
     * @param int $deduct_on_hit
     * @return $this
     */
    public function setDeductOnHit($deduct_on_hit)
    {
        $this->deduct_on_hit = (int) $deduct_on_hit;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

}