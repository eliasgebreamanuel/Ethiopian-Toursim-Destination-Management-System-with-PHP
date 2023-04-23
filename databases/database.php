<?php
    $mysqlusername = "root";
    $mysqlpassword = "";
    $mysqlhostname = "localhost";
    $dbname = "hotel";
    $connect = mysqli_connect($mysqlhostname,$mysqlusername,$mysqlpassword,$dbname) OR die("Please try again");

    
?>