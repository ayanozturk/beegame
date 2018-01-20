<?php

namespace BeeGame;

use BeeGame\Service\GameSession;
use Slim\Http\Request;
use Slim\Http\Response;

final class Hit extends Action
{
    public function __invoke(Request $request, Response $response, array $args = [])
    {
        $game = $this->container->get('gameSession');
        $game->hit();

        return $response->withRedirect('/');
    }
}
