<?php

if (isset($_POST['reserve-submit'])) {

    require 'dbh.inc.php';

    $firstname = $_POST['fname'];
    $secondname    = $_POST['sname'];
    $email = $_POST['email'];
    $region = $_POST['region'];
    $contact    = $_POST['contact'];
    $dose = $_POST['dose'];



    $sql = "INSERT INTO reservation (firstname, secondname, email, region, contact, dose) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
         if (!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../reservation.php?error=sqlerror");
            exit();
        
            }
            else{
                mysqli_stmt_bind_param($stmt, "ssssss",  $firstname, $secondname, $email, $region, $contact, $dose);
                mysqli_stmt_execute($stmt);
                header("Location: ../index.php?reservation=success");
                    
        
                }
            }