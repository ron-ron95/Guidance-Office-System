<?php 

$router = new \Phalcon\Mvc\Router();

//Define a route
$router->add(
    "/students/start",
    array(
        "controller" => "students",
        "action"     => "start",
    )
);

$router->handle();

 ?>