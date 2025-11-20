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
    <table border = "0" align= "center">
        <tr>
            <td><b>user: </b>
            <?php echo $_SESSION ['session_user_fullname']; ?>
            </td>
            <td>
                <?php echo "<img src=
            '" .$_SESSION['session_user_url_photo']." ' width ='30' >";?>

            </td>
        </tr>
</table>
       <a href = " list_users.php" >list all users </a> |
       <a href = " logout.php ">logout </a>
</body>
</html>