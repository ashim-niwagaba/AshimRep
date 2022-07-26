<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reservation|form</title>
    <link rel="stylesheet" type="text/css" href="stylee.css">
    <style>
        *{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}
body{
    background:#fff;
}
h1{
    text-align: center;
    margin-bottom: 10px;
    font-family: sans-serif;
}
.login_box{
    width: 300px;
    position: absolute;
    top:30%;
    left: 40%;
    background: #fff;
}
@media screen and (max-width: 677px){
    .login_box{
        width: 100%;
        position: absolute;
        left: 0%;
        top: 10%;
    }
}
.textbox input{
    width: 100%;
    margin-bottom: 10px;
    height: 40px;
    border: 2px #4682b4 solid;
    border-radius: 40px;
    text-align: center;
    font-size: 19px;


}
.btn_btn{
    width: 100%;
    margin: 15px auto;
    height: 39px;
    background: blue;
    font-size: 20px;
    font-family: sans-serif;
    border: 1px blue solid;
    border-radius: 40px;
    font-weight: bold;
}
.logo{
    width: 90px;
    height: 90px;
   
}
.btn_btn:hover{
    cursor: pointer;
    background-color: rgb(61, 61, 133);
    transition: .1s ease-in-out;
}
    </style>
</head>
<body>
    <?php
    if (isset($_SESSION['userid'])){

    echo'<div class="login_box">
       
       <center><p style="color:#ff1b68;"></p></center>
       <center><img src="assets/logo.jpg" alt="logo" class="logo"></center>
        <center><h2>Reservation form</h2></center>
        <form action="includes/reservation.inc.php" method="POST">
        <div class="textbox">
            <input type="text" name="fname" placeholder="FirstName" required>
        </div>
        <div class="textbox">
            <input type="text" name="sname" placeholder="SecondName..." required>
        </div>
        <div class="textbox">
            <input type="email" name="email" placeholder="EmailAddress" required>
        </div>
        <div class="textbox">
            <input type="text" name="region" placeholder="Region..." required>
        </div>
        <div class="textbox">
            <input type="number" name="contact" placeholder="PhoneNo..." required>
        </div>
        <div class="textbox">
            <input type="number" name="dose" placeholder="Dose 1 or 2?" required>
        </div>
        
        <button class="btn_btn" type="submit" name=reserve-submit>Make Reservation</button><br>
    </form>';
}
else{
    header("Location: login.php?error=please first login "); 
}
    ?>
        <center><a href="index.php">Home Page</a></center>
        <center><p>&copy; copyright 2022</p></center>
    </div>
</body>
</html>