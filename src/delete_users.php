<?php
  //Step 1. get database connection
 require('../config/database.php');

 // step 2. get data or params
 $user_id = $_GET['userId'];

 // step 3. prepare query
  $sql_delete_user = "delete from users where id= $user_id";

 // step 4. execute query 
 $result = pg_query($conn_local, $sql_delete_user);
    if (!$result){
        die("error:". pg_last_error());
    }else{
        echo"<script>alert('user has been deleted!')</script>";
        header('refresh:0;url=list_users.php'); // este sirve para cuando una condicion no cumple se regrese al inicio
    }
?>