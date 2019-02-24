<?php

namespace Test\Service;

use BeeGame\Service\GameSession;
use PHPUnit\Framework\TestCase;

/**
 * Class GameServiceTest
 */
class GameServiceTest extends TestCase
{
    public function testItInitilisesNumberOfBees()
    {
        $settings = [
            'queenCount' => 1,
            'workerCount' => 5,
            'droneCount' => 7,
        ];
        $game = new GameSession($settings);


        $this->assertCount(13, $game->bees);
    }
}
