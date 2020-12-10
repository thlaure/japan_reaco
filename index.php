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
    case "/projects/ar-project":
        $participants = json_decode(file_get_contents("./assets/docs/projects.json"))->ar;
        require __DIR__ . "/views/project_ar.php";
        break;
    case "/projects/vr-project":
        $participants = json_decode(file_get_contents("./assets/docs/projects.json"))->vr;
        require __DIR__ . "/views/project_vr.php";
        break;
    case "/projects/web-project":
        $participants = json_decode(file_get_contents("./assets/docs/projects.json"))->web;
        require __DIR__ . "/views/project_web.php";
        break;
    default:
        require __DIR__ . "/views/error404.php";
}