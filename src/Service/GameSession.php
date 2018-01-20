<?php

namespace BeeGame\Service;

use BeeGame\Entity\Bee;
use BeeGame\Entity\DroneBee;
use BeeGame\Entity\QueenBee;
use BeeGame\Entity\WorkerBee;

final class GameSession
{
    /* @var Bee[] */
    public $bees = [];

    /* @var int */
    private $queenCount;

    public function __construct(array $settings = [])
    {
        $this->queenCount = $settings['queenCount'];

        for ($i = 1; $i <= $settings['queenCount']; $i++) {
            $this->bees[] = new QueenBee();
        }

        for ($i = 1; $i <= $settings['workerCount']; $i++) {
            $this->bees[] = new WorkerBee();
        }

        for ($i = 1; $i <= $settings['droneCount']; $i++) {
            $this->bees[] = new DroneBee();
        }
    }

    public function hit()
    {
        if (!count($this->bees)) {
            throw new \RuntimeException('All bees are dead');
        }

        $bee = $this->getRandomBee();
        $bee->setHitPoints($bee->getHitPoints() - $bee->getDeductOnHit());

        if ($bee instanceof QueenBee && !$bee->isAlive()) {
            $this->queenCount--;
        }

        if ($this->queenCount === 0) {
            $this->killAllBees();
        }
    }

    public function isInProgress(): bool
    {
        $state = false;

        foreach ($this->bees as $bee) {
            if ($bee->isAlive()) {
                $state = true;
                break;
            }
        }

        return $state;
    }

    private function killAllBees()
    {
        foreach ($this->bees as $bee) {
            $bee->markDead();
        }
    }

    private function getRandomBee()
    {
        do {
            $bee = $this->bees[array_rand($this->bees)];
        } while (!$bee->isAlive());

        return $bee;
    }
}
