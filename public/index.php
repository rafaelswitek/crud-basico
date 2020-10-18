<?php

require __DIR__ . '/../vendor/autoload.php';

use Switek\Crud\Controller\Client;

$path = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '/'; //Pega o caminho da url
$routes = require __DIR__ . '/../config/routes.php'; //Carrega as rotas

if (!array_key_exists($path, $routes)) { //Verifica se a url consta nas rotas, se não existir retorna Erro 404
    http_response_code(404);
    exit();
}

session_start();

$method = $routes[$path]; //Pega o metodo referente a url

$client = new Client();
$client->$method();
