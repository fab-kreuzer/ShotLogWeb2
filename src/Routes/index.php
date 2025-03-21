<?php
use ShotLog\Controllers\HomeController;
use ShotLog\Controllers\LoginController;
use ShotLog\Controllers\LogoutController;
use ShotLog\Controllers\TrainingController;
use ShotLog\Controllers\CompetitionController;
use ShotLog\Controllers\CalenderController;
use ShotLog\Controllers\UserManagementController;
use ShotLog\Router;

$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$staticFile = __DIR__ . '/../'.$requestUri;

if (preg_match('/\.(css)$/', $requestUri)) {
    // Serve the static file
    header('Content-Type: text/css');
    readfile($staticFile);
    exit;
}

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Check if user is logged in
if (!isset($_SESSION['user_id']) && $requestUri !== '/login') {
    header('Location: /login');
    exit;
}

$router = new Router();

$router->get("/", HomeController::class, "enter");
$router->get("/training", TrainingController::class, "enter");
$router->get("/competition", CompetitionController::class, "enter");
$router->get("/calender", CalenderController::class, "enter");
$router->get("/logout", LogoutController::class, "enter");
$router->get("/login", LoginController::class, "enter");
$router->get("/login", LoginController::class, "enter");
$router->post("/login", LoginController::class, "login");
$router->get("/usermanagement", UserManagementController::class, "enter");
$router->post("/addUser", UserManagementController::class, "addUser");
$router->post("/removeUser", UserManagementController::class, "removeUser");
$router->post('/updateUser', UserManagementController::class, 'updateUser');

$router->dispatch();