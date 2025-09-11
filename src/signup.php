<?php
 //Step 1. get database connection
 require('../config/database.php');
 //Step 2. get from-data
    $f_name=$_POST['fnama'];
    $l_name=$_POST['lnama'];
    $m_number=$_POST['mnumber'];
    $ide_number=$_POST['idnumber'];
    $e_mail=$_POST['email'];
    $p_wd=$_POST['passwd'];

    $enc_pass= password_hash($p_wd,PASSWORD_DEFAULT);
  //Step 3. create query to insert into
  $query="
  INSERT INTO users(
          firstname,
          lastname,
          mobile_number,
          ide_number,
          email,
          password
          )VALUES(
           '$f_name',
           '$l_name',
           '$m_number',
           '$ide_number',
           '$e_mail',
           '$enc_pass'
            )
          ";
//Step 4. execute query
          $res=pg_query($conn,$query);
//Step 5. create query to insert into
if($res){
    echo"user has been created successfully !!!";
}else{
    echo"something wrong!";
}
?>
