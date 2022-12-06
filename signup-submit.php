<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php

require_once "includes/dbconnect.inc.php";


if(isset($_POST['signup_submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pwd = $_POST['pwd'];
    $email = $_POST['email'];   

    


    $stmt = $conn->prepare("SELECT * FROM user WHERE Email=:email");
    $stmt->execute(['email' => $email]);

    if($stmt->rowCount() > 0){
        header("Location: ./signup.php?success=False&fname=$fname&lname=$lname");
    } else {
        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        $sql = "INSERT INTO user (FirstName, LastName, Email, Password) 
        VALUES(:fname, :lname, :email, :pwd)";
        $stmt = $conn->prepare($sql);

        $stmt->execute(['fname'=>$fname, 'lname' => $lname, 'email'=> $email, 'pwd'=>$hashedPwd]);


    }


}

?>

    <title>Document</title>
    
    


</head>


<body>
    <h1>Signup Page</h1>
</body>
</html>