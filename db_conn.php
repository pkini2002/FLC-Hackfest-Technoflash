<?php
    $sname="localhost";
    $uname="root";
   // $password="1234";
   $password="";
    $db_name="students_data_44b";
    $conn=mysqli_connect($sname,$uname,$password,$db_name);
    
    if(!$conn){
        echo "Connection failed";
        exit();
    }
?>