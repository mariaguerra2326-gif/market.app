<?php
 //Step 1. get database connection
 require('../config/database.php');
 session_start();
 if(isset($_session['session_user_id'])){
   header('refresh:0;url=main.php');
 }
 //Step 2. get from-data
    $e_mail=trim($_POST['email']);
    $p_wd=trim($_POST['passwd']);
 //step 3. query to validate data
 //$enc_pass= password_hash($p_wd,PASSWORD_DEFAULT);
 $enc_pass= md5($p_wd);
 $sql_check_user="
 --query tp check if user exissts or credentials are correct*/
    select 
      u.id,
      u.firstname || ' ' || u.lastname as fullname,
       u.email,
       u.password
    from 
       users u 
    where
        u.email ='$e_mail' and 
        u.password='$enc_pass' 
    limit 1
    ";
  $res_check = pg_query($conn_local,$sql_check_user);
  $row = pg_fetch_assoc($res_check)
  $_session['session_user_id']= $row['id'];
  $_session['session_user_fullname']= $row['fullname'];

  if(pg_num_rows($res_check)>0){
      //echo "user exists. go to main page!!!";
       header ('refresh:0;url=main.php');
  }else{
    echo"verify data";
  }

