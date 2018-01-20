<?php

namespace BeeGame\Entity;

/**
 * Class Bee
 * @package BeeGame\Entity
 */
abstract class Bee
{
    protected $hitPoints = 0;

    protected $deductOnHit = 0;

    protected $name = 'Bee';

    private $status = 'Alive';

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getHitPoints(): int
    {
        return $this->hitPoints;
    }

    public function setHitPoints(int $hitPoints): Bee
    {
        $this->hitPoints = $hitPoints;

        if ($hitPoints <= 0) {
            $this->markDead();
        }

        return $this;
    }

    public function markDead()
    {
        $this->hitPoints = 0;
        $this->status = 'Dead';
    }

    public function isAlive(): bool
    {
        return $this->hitPoints > 0 ? true : false;
    }

    public function getDeductOnHit(): int
    {
        return $this->deductOnHit;
    }

    public function setDeductOnHit(int $deductOnHit): Bee
    {
        $this->deductOnHit = $deductOnHit;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Bee
    {
        $this->name = $name;
        return $this;
    }
}
