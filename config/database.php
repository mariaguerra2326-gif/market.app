<?php
    // Database connection to local server

    $supa_host ="aws-1-us-east-1.pooler.supabase.com";
    $supa_user = "postgres.qrsetgiygeqxcrmiofsv";
    $supa_dbname = "postgres";
    $supa_password = "unicesmag@@";
    $supa_port = "6543";
    
    //database connection to local server 
    $local_host ="localhost"; 
    $local_user = "postgres";
    $local_dbname = "marketapp";
    $local_password = "unicesmag";
    $local_port = "5432";

    $supa_data_connection = "
        host=$supa_host
        user=$supa_user
        password=$supa_password
        dbname=$supa_dbname
        port=$supa_port
      ";
    $local_data_connection = "
        host=$local_host
        user=$local_user
        password=$local_password
        dbname=$local_dbname
        port=$local_port
    ";
    
    //$conn_supa =pg_connect($supa_data_connection);
    $conn_local=pg_connect($local_data_connection);

    if(!$conn_local){
        echo "error:". pg_last_error();
    }else{
        echo"connection successfully :::";
    }
?>


