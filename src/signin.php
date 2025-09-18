<?php
 //Step 1. get database connection
 require('../config/database.php');
 //Step 2. get from-data
    $e_mail=$_POST['email'];
    $p_wd=$_POST['passwd'];
 //step 3. query to validate data
 $sql_check_user="
 --query tp check if user exissts or credentials are correct*/
    select 
       u.email,
       u.password
    from 
       users u 
    where
        u.email ='$e_mail' and 
        u.password='$p_wd' 
    limit 1
    ";
  $res_check = pg_query($conn,$sql_check_user);
  if(pg_num_rows($res_check)>0){
      echo "user exists. go to main page!!!";
  }else{
    echo"verify data";
  }

