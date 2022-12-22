<?php
session_start();
        if($_SESSION['Auth']==1){
             $_SESSION['Auth']=0;
             session_destroy();
             header("Location: login.php");
        }
?>