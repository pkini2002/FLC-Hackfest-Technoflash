<?php
// Include the database configuration file
include 'db_conn.php';
$statusMsg = '';

// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file1"]["name"]);
$fileName1 = basename($_FILES["file2"]["name"]);
$fileName2 = basename($_FILES["file3"]["name"]);
$targetFilePath = $targetDir . $fileName;
$targetFilePath1 = $targetDir . $fileName1;
$targetFilePath2 = $targetDir . $fileName2;

include 'starter.php';

if(isset($_POST["submit"])){
     $file1=$_FILES['file1']['name'];
     $file_temp1=$_FILES['file1']['tmp_name'];
     $file2=$_FILES['file2']['name'];
     $file_temp2=$_FILES['file2']['tmp_name'];
     $file3=$_FILES['file3']['name'];
     $file_temp3=$_FILES['file3']['tmp_name'];

     $usn=$_POST['usn'];

    //Checkbox logic
    $ids=$_POST['ids'];
    
    //Converting array to string
    $val=implode(",",$ids);
  
    //  File storage value
    $data=[];
    $data=[$file1,$file2,$file3];
    $images=implode('',$data);

    // Query
    $query="INSERT into images (USN,file_name, uploaded_on,clubs) VALUES ('".$usn."','".$images."', NOW(),'". $val."')";
    $connect=mysqli_query($conn,$query);

    if($connect){
        move_uploaded_file($_FILES["file1"]["tmp_name"], $targetFilePath);
        move_uploaded_file($_FILES["file2"]["tmp_name"], $targetFilePath1);
        move_uploaded_file($_FILES["file3"]["tmp_name"], $targetFilePath2);
        echo "

        <div class='card container shadow p-3 mb-5 bg-body rounded' style='width: 65%;margin-top: 150px;'>
               
       <div class='container'>
       <div class='form-group' style='text-align: center;'>
            <br>
            <strong class='warning-text' style='position: relative;left: 1%;' >       
            The files has been uploaded successfully!</strong><br/>
           <br>
            <button class='btn btn-danger delete-post' style='width:200px;position: relative;left: 1%;''>
            <a href='newdashboard.php' style='text-decoration:none;color:#fff;'>
            Go to Dashboard
            </a>
            </button>
        </div>
        </div>
       </div>";
    
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
             <a href='docupload.php' style='text-decoration:none;color:#fff;'>
             There was some error in uploading the file!
             </a>
             </button>
         </div>
         </div>
        </div>
        ";
    }
}
include 'end.php';
echo $statusMsg;
?>