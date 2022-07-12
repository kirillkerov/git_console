<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use App\GetStringCommand;
use App\GetUserCommand;
use App\HelloCommand;
use Symfony\Component\Console\Application;

$app = new Application();
$app->add(new HelloCommand());
$app->add(new GetStringCommand());
$app->add(new GetUserCommand());

$app->run();
