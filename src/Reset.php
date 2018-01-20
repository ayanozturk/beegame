<?php

namespace BeeGame;

use BeeGame\Service\GameSession;
use Slim\Http\Request;
use Slim\Http\Response;

final class Reset extends Action
{
    public function __invoke(Request $request, Response $response, array $args = [])
    {
        if (isset($_SESSION['game']) && $_SESSION['game'] instanceof GameSession) {
            unset($_SESSION['game']);
        }

        return $response->withRedirect('/');
    }
}
