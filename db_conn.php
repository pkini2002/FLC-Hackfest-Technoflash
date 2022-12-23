<?php
    $sname="localhost:4306";
    $uname="root";
    $password="1234";
    $db_name="test_db";
    $conn=mysqli_connect($sname,$uname,$password,$db_name);
    
    if(!$conn){
        echo "Connection failed";
        exit();
    }
?>