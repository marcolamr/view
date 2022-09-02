<?php

use MarcolaMr\View\View;

require __DIR__ . "/../vendor/autoload.php";

$view = new View(__DIR__ . "/resources/views");

$view->init([
    "url" => "http://localhost"
]);

$content = $view->render("home", [
    "name" => "Test Name"
]);

echo $content;