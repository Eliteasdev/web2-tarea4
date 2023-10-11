<?php
    session_start();
    if(isset($_POST['user']) && isset($_POST['password'])){
        $user = $_POST['user'];
        $password = $_POST['password'];

        if($user === 'admin' && $password === 'admin'){
            $_SESSION['user'] = $user;
            $expiration = time() + 36000;
            setcookie('session_id', session_id(), $expiration, '/');
            header('Location: ../views/welcome.php');
        }else{
            include '../components/login-error.php';
        }
    }else{
        header('Location: ../index.php');
    }
?>

