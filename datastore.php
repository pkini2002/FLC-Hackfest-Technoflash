<?php
// Include the database configuration file
include 'db_conn.php';
$targetDir = "uploads/";
$fileName = basename($_FILES['file']['name']);
$targetFilePath = $targetDir . $fileName;

   if(isset($_POST["submit"])){
        $name1=$_POST['name'];
        $usn=$_POST['usn'];
        $bio=$_POST['bio'];
        $email1=$_POST['email'];
        $linkedin=$_POST['linkedin'];
        $github=$_POST['github'];
     

        $file1=$_FILES['file']['name'];
        $file_temp1=$_FILES['file']['tmp_name'];

        $data=[];
        $data=[$file1];
        $images=implode('',$data);
     

    // Query
    $query="INSERT INTO `profile` (`name1`, `USN`, `description1`, `emailurl`, `linkedinurl`, `githuburl`,`photo`) VALUES ('".$name1."','".$usn."','".$bio."', '".$email1."', '".$linkedin."','".$github."','".$images."')";
    $connect=mysqli_query($conn,$query);

    if($connect){
        echo "Connected";
        move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath);
    }
    else{
        echo "Cant conn";
    }
   }
//    echo "Done";
?>