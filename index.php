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
$user = new UserController();
$home->db = $db;
$user->db = $db;

$router->get('/', [$home, 'index']);
$router->get('/login', [$home, 'login']);
$router->post('/login', [$home, 'doLogin']);
$router->get('/signup', [$home, 'signup']);
$router->post('/signup', [$home, 'signup']);
$router->get('/logout', [$home, 'logout']);
$router->get('/about', [$home, 'about']);
$router->get('/services', [$home, 'services']);
$router->get('/services/web-development', [$home, 'webDevelopment']); 
$router->get('/services/it-consultant', [$home, 'itConsultant']); 
$router->get('/services/mobile-apps-development', [$home, 'mobileAppsDevelopment']); 

$router->get('/profile', [$user, 'profile']);
// $router->get('/profile', [$user, 'getProfile']);
$router->get('/comments', [$user, 'comments']);
$router->get('/edit', [$user, 'edit']);

$method = $_SERVER['REQUEST_METHOD'];
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Debugging log
error_log("Method: $method, URI: $uri");

$router->dispatch($method, $uri);
?>
