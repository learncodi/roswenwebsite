<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
 integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
 <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
 <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
 <link rel="stylesheet" href="https://fontawesome.com/icons">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
    <style>
        body {
            font-family: Georgia, serif;
        }
    </style>
    <div class="container mt-3">
        <a href="home.html" class="btn btn-outline-warning"><i>Home</i></a>
        <a href="home.html" class="btn btn-outline-warning"><i>About</i></a>
        <a href="home.html" class="btn btn-outline-warning"><i>Earn Money</i></a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <span class="material-symbols-outlined"><a href="logout.php" class="btn btn-outline-warning">Logout</span></a>

    </div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-image: url('image2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
</head>
<body>
    <div class="content">
    <center><h2 class="text" data-text="ROSWEN WEBSITE">
        WELCOME TO ROSWEN WEBSITE
    </h2>
</center>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Social Media Buttons with Tooltip</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="wrapper">
         <div class="icon facebook">
            <div class="tooltip">
               Facebook
            </div>
            <span><i class="fab fa-facebook-f"></i></span>
         </div>
         <div class="icon discord">
            <div class="tooltip">
               Discord
            </div>
            <span><i class="fab fa-discord"></i></span>
         </div>
         <div class="icon telegram">
            <div class="tooltip">
               Telegram
            </div>
            <span><i class="fab fa-telegram"></i></span>
         </div>
         <div class="icon github">
            <div class="tooltip">
               Github
            </div>
            <span><i class="fab fa-github"></i></span>
         </div>
         <div class="icon youtube">
            <div class="tooltip">
               YouTube
            </div>
            <span><i class="fab fa-youtube"></i></span>
         </div>
      </div>
   </body>
</html>

