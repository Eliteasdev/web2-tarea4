<?php
    session_start();

    $uri = $_SERVER['REQUEST_URI'];
    $rutas = [
        '/' => 'views/welcome.php',
        '/about' => 'views/about.php',
        '/login' => 'views/login.php'
    ];

    if(isset($_COOKIE['session_id']) && $_COOKIE['session_id'] === session_id()){
        $user_authenticated = $_SESSION['user'];
        header('Location: ./views/welcome.php');
    }else{
        header('Location: ./views/login.php');
    }

    if(array_key_exists($uri, $rutas)){

        if($uri === '/views/login.php'){
            header('Location: ./views/welcome.php');
        }

        include $rutas[$uri];
    }else{
        include 'views/error.php';
    }
?>