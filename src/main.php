<?php
session_start();
if(!isset($_SESSION['session_user_id'])){
   header('refresh:0;url=error_403.html');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "icon" type="imagen/png" href="src/icons/market_main.png"/>
    <title>Market.app - home</title>
</head>
<body>
    <center><b>user: </b> here print your name</h6></center>
 <a href="list_users.php"> list all users</a> |
 <a href="logout.php"> logout</a>   
</body>
</html>