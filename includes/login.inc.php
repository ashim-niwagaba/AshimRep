<?php

if (isset($_POST['login-submit'])) {

    require 'dbh.inc.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        header("Location: ../index.php?error=emptyfields");
        exit();
    }
    else{
     $sql = "SELECT * FROM users WHERE username=? OR email=?;";
     $stmt = mysqli_stmt_init($conn);
     if (!mysqli_stmt_prepare($stmt, $sql)) {
         header("Location: ../index.php?error=sqlerror");
         exit();
     }

     else{
         mysqli_stmt_bind_param($stmt, "ss", $email, $email);
         mysqli_stmt_execute($stmt);
         $result = mysqli_stmt_get_result($stmt);

         if ($row = mysqli_fetch_assoc($result)) {
             $pwdcheck = password_verify($password, $row['passwordd']);
             if ($pwdcheck == false){
                header("Location: ../index.php?error=wrongPassword");
                exit();

             }
             else if($pwdcheck == true){
                session_start();
                $_SESSION['userid'] = $row['userid'];
                $_SESSION['username'] = $row['username'];
                 
                header("Location: ../index.php?Login=success");
                exit();
             }


         }
         else{
             header("Location: ../index.php?error=no-user");
             exit();
         }


     }

    }


    
}
else{
    header("Location: ../index.php");
    exit();
}