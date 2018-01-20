<?php

$container = $app->getContainer();


/**
 * @param Slim\Container $c
 * @return \Slim\Views\PhpRenderer
 */
$container['renderer'] = function ($c) {
    $settings = $c->get('settings')['renderer'];
    return new Slim\Views\PhpRenderer($settings['template_path']);
};

/**
 * @param Slim\Container $c
 * @return \BeeGame\Service\GameSession
 */
$container['gameSession'] = function ($c) {

    if (isset($_SESSION['game']) && $_SESSION['game'] instanceof \BeeGame\Service\GameSession) {
        $game = $_SESSION['game'];
    } else {
        $settings = $c->get('settings')['game'];
        $game = new BeeGame\Service\GameSession($settings);
        $_SESSION['game'] = $game;
    }

    return $game;
};
