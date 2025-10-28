<?php

require_once __DIR__ . '/../src/WelcomeController.php';

$controller = new WelcomeController();
$response = $controller->index();
$response->send();
