<?php 
    $mysql_host = 'localhost';
    $mysql_user = 'root';
    $mysql_pass = 'Data@2020';
    $mysql_db = 'mylogin';

    $conn = mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db);
    if(!$conn){
        die(mysqli_connect_error());
    }

?>