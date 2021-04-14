<?php

    $servername = '';
    $db_user = ''; 
    $db_password = '';
    $db_name = '';

    $conn = mysqli_connect($servername,$db_user , $db_password,$db_name );

    if(!$conn){
        die("Connection failer: ".mysqli_connect_error());
    }

?>