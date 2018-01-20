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
