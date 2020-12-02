<?php

$request = $_SERVER["REQUEST_URI"];
switch ($request) {
    case "/":
        require __DIR__ . "/views/home.php";
        break;
    case "/team":
        $projects = json_decode(file_get_contents("./assets/docs/members.json"))->projects;
        require __DIR__ . "/views/team.php";
        break;
    default:
        require __DIR__ . "/views/error404.php";
}