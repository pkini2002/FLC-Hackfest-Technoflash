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

if(isset($_POST["submit"])){
     $file1=$_FILES['file1']['name'];
     $file_temp1=$_FILES['file1']['tmp_name'];
     $file2=$_FILES['file2']['name'];
     $file_temp2=$_FILES['file2']['tmp_name'];
     $file3=$_FILES['file3']['name'];
     $file_temp3=$_FILES['file3']['tmp_name'];

     $data=[];
     $data=[$file1,$file2,$file3];
     $images=implode('',$data);

    $query="INSERT into images (file_name, uploaded_on) VALUES ('".$images."', NOW())";
    $connect=mysqli_query($conn,$query);
    if($connect){
        move_uploaded_file($_FILES["file1"]["tmp_name"], $targetFilePath);
        move_uploaded_file($_FILES["file2"]["tmp_name"], $targetFilePath1);
        move_uploaded_file($_FILES["file3"]["tmp_name"], $targetFilePath2);
        echo "The files has been uploaded successfully!";
    }
    else{
        echo "Failed";
    }
}
echo $statusMsg;
?>