<?php
// Include the database configuration file
include 'db_conn.php';
$targetDir = "uploads/";
$fileName = basename($_FILES['file']['name']);
$targetFilePath = $targetDir . $fileName;

include 'starter.php';

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
    $sql8="SELECT * FROM `logindetail966` WHERE `USN` ='$usn'";
    $data8=mysqli_query($conn,$sql8);
    while($fetch2=mysqli_fetch_assoc($data8))
    {
     
          $username=$fetch2['USN'];
  
  $name=$fetch2['Name'];
    }

if(($name1==$name)&&($usn==$username))
{
    $query="INSERT INTO `profile` (`name1`, `USN`, `description1`, `emailurl`, `linkedinurl`, `githuburl`,`photo`) VALUES ('".$name1."','".$usn."','".$bio."', '".$email1."', '".$linkedin."','".$github."','".$images."')";
    $connect=mysqli_query($conn,$query);

    if($connect){
        
$query2="UPDATE `logindetail966` SET `keyshow` ='".$usn."' WHERE `logindetail966`.`USN` = '".$usn."'";
        $connect2=mysqli_query($conn,$query2);
        echo$connect2;
        if($connect2)
        {
        echo "
        <div class='card container shadow p-3 mb-5 bg-body rounded' style='width: 65%;margin-top: 150px;'>
               
       <div class='container'>
       <div class='form-group' style='text-align: center;'>
            <br>
            <strong class='warning-text' style='position: relative;left: 1%;' > 
            You have succesfully filled the form!     
            </strong><br/>
           <br>
            <button class='btn btn-success delete-post' style='width:200px;position: relative;left: 1%;''>
            <a href='profile.php' style='text-decoration:none;color:#fff;'>
            Go to Dashboard
            </a>
            </button>
        </div>
        </div>
       </div>
        
        ";
        move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath);
        }
        else
        echo"USN IS incorrect";
    }
    else{
        echo "
        <div class='card container shadow p-3 mb-5 bg-body rounded' style='width: 65%;margin-top: 150px;'>
               
       <div class='container'>
       <div class='form-group' style='text-align: center;'>
            <br>
            <strong class='warning-text' style='position: relative;left: 1%;' >       
            The files has been uploaded successfully!</strong><br/>
           <br>
            <button class='btn btn-danger delete-post' style='width:200px;position: relative;left: 1%;''>
            <a href='Dashboard.php' style='text-decoration:none;color:#fff;'>
            Go to Dashboard
            </a>
            </button>
        </div>
        </div>
       </div>
        
        ";
    }
}
else
echo "unauthorized";
include 'end.php';
}
?>