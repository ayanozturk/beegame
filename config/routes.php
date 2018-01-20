<?php

use BeeGame\Game;
use BeeGame\Hit;
use BeeGame\Reset;

$app->get('/', Game::class);
$app->get('/hit', Hit::class);
$app->get('/reset', Reset::class);
