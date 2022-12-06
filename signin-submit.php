<?php

    require_once "includes/dbconnect.inc.php";

    if(isset($_POST['signin-submit'])){
        $emailError = FALSE;
        $loginError = FALSE;
    
        $email = $_POST['email'];
        $pwd =
    
        $sql = "SELECT * FROM user WHERE Email=:email LIMIT 1";
        $stmt = $conn->prepare($sql);
    
        $stmt->execute(["email" =>])

    } else {
        header("Location: signin.php")
    }

?>