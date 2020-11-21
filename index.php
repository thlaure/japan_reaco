<?php

$request = $_SERVER["REQUEST_URI"];
switch ($request) {
    case "/":
        require __DIR__ . "/templates/home.php";
        break;
    case "/home":
        require __DIR__ . "/templates/home.php";
        break;
    case "/team":
        require __DIR__ . "/templates/team.php";
        break;
}

require __DIR__ . "/templates/error404.php";