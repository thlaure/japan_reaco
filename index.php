<?php

$request = preg_match("/(\/[^\/ ]*)\/*[^\/ ]*/", $_SERVER['REQUEST_URI'], $matches) ? $matches[1] : '';

switch ($request) {
    case '/':
        require __DIR__ . '/views/home.php';
        break;
    case '/team':
        $projects = json_decode(file_get_contents('./assets/docs/projects.json'));
        require __DIR__ . '/views/team.php';
        break;
    case "/projects":
        $project = preg_match("/\/projects\/([a-z]+)-project/", $_SERVER['REQUEST_URI'], $matches) ? $matches[1] : header('Location: /');
        $participants = json_decode(file_get_contents('./assets/docs/projects.json'))->$project;
        require __DIR__ . '/views/project.inc.php';
        break;
    default:
        require __DIR__ . '/views/error404.php';
}