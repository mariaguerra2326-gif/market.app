<?php
 //Step 1. get database connection
 require('../config/database.php');
 /*
 session_start();
 if(!isset($_session['session_user_id'])){
   header('refresh:0;url=error_403.html');
 }
   */
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>market.app - list users</title>
</head>
<body>
    <div class="container mt-3">
    <table class="table table-borderless">
    <tr>
        <th>fullname</th>
        <th>e-mail</th>
        <th>ide. number</th>
        <th>phone number</th>
        <th>status</th>
        <th>photo</th>
        <th>options</th>
    </tr>
    <?php
    $sql_users="select 
        u.id as user_id,
        u.firstname ||' '|| u.lastname as fullname,
        u.email,
        u.ide_number,
        u.mobile_number,
        case 
          when u.status= true then 'active' else 'inactive'
        end as status,
        u.url_photo
        from 
           users u";
    $result = pg_query($conn_local, $sql_users);
    if (!$result){
        die("error:". pg_last_error());
    }
    while($row = pg_fetch_assoc($result)){
      echo "<tr class='success'>
        <td>". $row['fullname']. "</td>
        <td>" . $row ['email']."</td>
        <td>" . $row ['ide_number']."</td>
        <td>" . $row ['mobile_number']."</td>
        <td>" . $row['status']."</td>
        <td align= 'center' ><img src=". $row['url_photo']." width='30'</td>
        <td>

            <a href = '#'><img src='icons/lupa.png' width='20'></a> 
            <a href='edit_user_form.php?userId=" . $row['user_id']."'><img src='icons/actualizar.png' width='20'></a>
            <a href= 'delete_user.php'>
            <a href='delete_users.php?userId=" . $row['user_id']."'><img src='icons/basura.png' width='20'></a>
        </td>
      </tr>
      ";
    }
        ?>
    
    </table>
    </div>
</body>
</html>