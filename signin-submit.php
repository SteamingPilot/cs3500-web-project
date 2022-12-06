<?php

    require_once "includes/dbconnect.inc.php";

    if(isset($_POST['signin-submit'])){
    
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
    
        $sql = "SELECT * FROM user WHERE Email=:email LIMIT 1";
        $stmt = $conn->prepare($sql);
    
        $stmt->execute(["email" => $email]);

        if($stmt->rowCount()){
            while($res = $stmt->fetch()){
                if(password_verify($pwd, $res["Password"])){
                    session_start();
                    $_SESSION['UserId'] = $res['Id'];
                    $_SESSION["UserFirstName"] = $res['FirstName'];
                    $_SESSION["UserLastName"] = $res["LastName"];
                    header("Location: index.php");
                } else {

                    echo "PasswordInvalid";
                }
            }


        }  else {
            echo "UserInvalid";
        }



    } else {
        header("Location: singin.php");
    }

?>