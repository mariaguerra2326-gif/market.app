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
    $sql_users="select 
        u.firstname ||' '|| u.lastname as fullname,
        u.email,
        u.ide_number,
        u.mobile_number,
        case 
          when u.status= true then 'active' else 'inactive'
        end as status
        from 
           users u";
    $result = pg_query($conn_local, $sql_users);
    if (!$result){
        die("error:". pg_last_error());
    }
    while($row = pg_fetch_assoc($result)){
      echo " 
      <tr>
        <td>". $row['fullname']. "</td>
        <td>joe@gmail.com</td>
        <td>123655489</td>
        <td>32648787</td>
        <td>active</td>
        <td>
            <a href = '#'>
            <img src='icons/lupa.png' width='20'>
            </a> |
            <a href='#'>update</a> |
            <a href='#'>update</a>
        </td>
      </tr>
      ";
    }
        ?>
    
    </table>
</body>
</html>