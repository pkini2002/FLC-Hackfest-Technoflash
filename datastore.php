<?php
// Include the database configuration file
include 'db_conn.php';
   if(isset($_POST["submit"])){
        $name1=$_POST['name'];
        $usn=$_POST['usn'];
        $bio=$_POST['bio'];
        $email1=$_POST['email'];
        $linkedin=$_POST['linkedin'];
        $github=$_POST['github'];

// Query
    $query="INSERT INTO `profile` (`name1`, `USN`, `description1`, `emailurl`, `linkedinurl`, `githuburl`) VALUES ('".$name1."','".$usn."','".$bio."', '".$email1."', '".$linkedin."','".$github."')";
    $connect=mysqli_query($conn,$query);

    if($connect){
        echo "Connected";
    }
    else{
        echo "Cant conn";
    }
   }
//    echo "Done";
?>