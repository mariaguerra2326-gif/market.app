<?php
 //Step 1. get database connection
 require('../config/database.php');
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>market.app - list users</title>
</head>
<body>
    <table border="1" align="center"> 
    <tr>
        <th>fullname</th>
        <th>e-mail</th>
        <th>ide. number</th>
        <th>phone number</th>
        <th>status</th>
        <th>options</th>
    </tr>
    <?php
     
    ?>
    <tr>
        <td>joe doe</td>
        <td>joe@gmail.com</td>
        <td>123655489</td>
        <td>32648787</td>
        <td>active</td>
        <td>
            <a href = "#">
                <img src="icons/lupa.png" width="20">
            </a>
            <a href="#">update</a>
            <a href="#">update</a>
        </td>
    </tr>
    </table>
</body>
</html>