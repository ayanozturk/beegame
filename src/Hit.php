<?php

namespace BeeGame;

use BeeGame\Service\GameSession;
use Slim\Http\Request;
use Slim\Http\Response;

final class Hit extends Action
{
    public function __invoke(Request $request, Response $response, array $args = [])
    {
        if (isset($_SESSION['game']) && $_SESSION['game'] instanceof GameSession) {
            /* @var $game GameSession */
            $game = $_SESSION['game'];
            $game->hit();
        }

        return $response->withRedirect('/');
    }
}
