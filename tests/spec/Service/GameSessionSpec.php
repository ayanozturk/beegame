<?php

namespace spec\BeeGame\Service;

use BeeGame\Service\GameSession;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GameSessionSpec extends ObjectBehavior
{
    private $settings = [
        'queenCount' => 1,
        'workerCount' => 5,
        'droneCount' => 7,
    ];

    function let()
    {
        $this->beConstructedWith($this->settings);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(GameSession::class);
    }

    function it_has_corrent_number_of_bees()
    {
        $this->bees->shouldHaveCount(
            $this->settings['queenCount'] + $this->settings['workerCount'] + $this->settings['droneCount']
        );
    }
}
