<?php
// Include the database configuration file
include 'db_conn.php';
include 'starter.php';

   if(isset($_POST["submit"])){
        $name1=$_POST['name'];
        $usn=$_POST['usn'];
        $bio=$_POST['bio'];
        $email1=$_POST['email'];
        $linkedin=$_POST['linkedin'];
        $github=$_POST['github'];
     
        $targetDir = 'uploads/';
        
        $file1=$_FILES['file']['name'];
        $fileName = basename($file1);
        $targetFilePath = $targetDir . $fileName;
       // echo $targetFilePath;
        $file_temp1=$_FILES['file']['tmp_name'];
        move_uploaded_file($file_temp1,$targetFilePath);

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
    $flag2=false;
    $flag=false;
    $sql9="SELECT * FROM `profile` WHERE `USN` ='$usn'";
    $data9=mysqli_query($conn,$sql9);
    $row=mysqli_num_rows($data9);
    if($row)
    {
        $sql10="UPDATE `profile` SET  `name1` = '$name1', `USN` = '$usn', `description1` = '$bio', `emailurl` = ' $email1', `linkedinurl` = '$linkedin', `githuburl` = '$github', `photo` = '$images' WHERE `profile`.`USN` = '$username'"; 
        $connect24=mysqli_query($conn,$sql10);
        $flag=false;
        $flag2=true;

    }
    else{

    $query="INSERT INTO `profile` (`name1`, `USN`, `description1`, `emailurl`, `linkedinurl`, `githuburl`,`photo`) VALUES ('".$name1."','".$usn."','".$bio."', '".$email1."', '".$linkedin."','".$github."','".$images."')";
    $connect=mysqli_query($conn,$query);
    $flag=true;

    }    
    if($flag) 
    {
$query2="UPDATE `logindetail966` SET `keyshow` ='".$usn."' WHERE `logindetail966`.`USN` = '".$usn."'";
        $connect2=mysqli_query($conn,$query2);
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
    }
    }
        else
       
        {
            header("location:create_profile.php?error=440");


        }


    

    if($flag2)
    {
        echo "
        <div class='card container shadow p-3 mb-5 bg-body rounded' style='width: 65%;margin-top: 150px;'>
               
       <div class='container'>
       <div class='form-group' style='text-align: center;'>
            <br>
            <strong class='warning-text' style='position: relative;left: 1%;' >       
            The profiles has been updated successfully!</strong><br/>
           <br>
            <button class='btn btn-danger delete-post' style='width:200px;position: relative;left: 1%;''>
            <a href='profile.php' style='text-decoration:none;color:#fff;'>
            Go to Dashboard
            </a>
            </button>
        </div>
        </div>
       </div>
        
        ";
    }

 
include 'end.php';
}
else 
{
  echo "<h2 style='color:blue;'>It seems like you are not registerd:
 <a id='moving' href='login.php'> <button type='button'style='color:green;'>click here</button></a></h2>";
}
?>