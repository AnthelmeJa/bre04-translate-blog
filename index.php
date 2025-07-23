<?php

    session_start();
    
    require "services/autoload.php";
    
    if(!isset($_SESSION["lang"]))
    {
        $_SESSION["lang"] = "fr";
    }
    
    $router = new Router();
    
    $router->handleRequest($_GET);
