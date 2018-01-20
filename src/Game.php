<?php

namespace BeeGame;

use BeeGame\Service\GameSession;
use Slim\Http\Request;
use Slim\Http\Response;

final class Game extends Action
{
    public function __invoke(Request $request, Response $response, array $args = [])
    {
        if (isset($_SESSION['game']) && $_SESSION['game'] instanceof GameSession) {
            $game = $_SESSION['game'];
        } else {
            $game = new GameSession($this->container->get('settings')['game']);
            $_SESSION['game'] = $game;
        }

        return $this->container->get('renderer')->render($response, 'index.phtml', [
            'game' => $game
        ]);
    }
}
