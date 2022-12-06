<?php
    session_start();

    if(isset($_SESSION['UserId'])){
        $uid = $_SESSION['UserId'];
        $ufname = $_SESSION['UserFirstName'];
        $ulname = $_SESSION['UserLastName'];
    } else{
        $uid = NULL;
    }

?>