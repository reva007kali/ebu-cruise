<?php
// Get the request URI and clean it
$request = $_SERVER['REQUEST_URI'];
$request = strtok($request, '?'); // remove query params
$request = rtrim($request, '/');

// Optional: Redirect to root if blank
if ($request === '') {
    $request = '/';
}

// Routes array
$routes = [
    '/' => 'routes/home.php',
    '/home' => 'routes/home.php',
    '/about' => 'routes/about.php',
];

// Routing logic
if (array_key_exists($request, $routes)) {
    require $routes[$request];
} else {
    require 'routes/404.php';
}
