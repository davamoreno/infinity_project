<?php
session_start();
require 'routes/Router.php';
require 'controllers/RouteController.php';
require 'controllers/AuthController.php';
require 'config/Database.php';

$database = new Database();
$db = $database->connect();

$router = new Router();
$home = new HomeController();
$home->db = $db;

$router->add('GET', '/', [$home, 'index']);
$router->add(['GET', 'POST'] , '/login', [$home, 'login']);
$router->add(['GET', 'POST'] , '/signup', [$home, 'signup']);
$router->add('GET', '/logout', [$home, 'logout']);

$method = $_SERVER['REQUEST_METHOD'];
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Debugging log
error_log("Method: $method, URI: $uri");

$router->dispatch($method, $uri);
?>
