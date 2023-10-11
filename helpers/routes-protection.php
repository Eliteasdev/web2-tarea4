<?php
function authenticated(){
    session_start();
    if(isset($_COOKIE['session_id']) && $_COOKIE['session_id'] === session_id()){
        $user_authenticated = $_SESSION['user'];
    }else{
        header('Location: ../index.php');
    }
}
?>