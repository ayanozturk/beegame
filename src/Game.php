<?php

namespace BeeGame;

use BeeGame\Service\GameSession;
use Slim\Http\Request;
use Slim\Http\Response;

final class Game extends Action
{
    public function __invoke(Request $request, Response $response, array $args = [])
    {
        return $this->container->get('renderer')->render(
            $response, 'index.phtml', [
            'game' => $this->container->get('gameSession')
        ]);
    }
}
