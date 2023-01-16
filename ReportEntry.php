<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    {
      include 'starter.php';
      include 'end.php';
      require 'db_conn.php';
 $method=$_SERVER['REQUEST_METHOD'];
if($method=='POST')// it work only when we submitte form.at that time method is post.
{
  
  @ $teacher=$_SESSION['Name'];
    $alert=false;
  $nam=$_POST['naame'];
 $usn=$_POST['USN'];
  $section=$_POST['Class'];
 $cs301=$_POST['subcode1'];
 $cs302=$_POST['subcode2'];
 $cs303=$_POST['subcode3'];
 $cs304=$_POST['subcode4'];
 $hu312=$_POST['subcode5'];

// attendence
$cs301a=$_POST['subcode1a'];
$cs302a=$_POST['subcode2a'];
$cs303a=$_POST['subcode3a'];
$cs304a=$_POST['subcode4a'];
$hu312a=$_POST['subcode5a'];
 $total=$cs301+$cs302+$cs303+$cs304+$hu312;
 $cgpa1=($cs301+$cs302+$cs303+$cs304+$hu312)/5;
 $cgpa2=$cgpa1/5;
 $per=(($total/250)*100);

 $sql32="SELECT * FROM `students_detail34` WHERE `USN`='.$usn.'";
 $data80=mysqli_query($conn,$sql32);
 $row=mysqli_num_rows($data80);
 if($row)
 {
  // data already persent
  // need to update
  $sql33="UPDATE `students_detail34` SET `SECTION`='$section',`TeacherName`='$teacher',`UpdatedAt`=current_timestamp(),`21CS301`='$cs301',`21CS302`='$cs302',`21CS303`='$cs303',`21CS304`='$cs304',`21HU312`='$hu312',`CIE`=250,`Obtained`='$total',`PERCENTAGE`='$per',`CLASS_HELD`=50,`CLASSES_ATTENDED`='.$cgpa2.'
  ,`21cs301a`='.$cs301a.',`21cs302a`='.$cs302a.',`21cs303a`='.$cs303a.',`21cs304a`='.$cs304a.',`21hu312a`='.$hu312a.'  WHERE `students_detail34`.`USN` = '.$usn.'";
  $connect24=mysqli_query($conn,$sql33); 
  header('location:ReportEntry2.php?updated=500');

  
 }
else{
$sql8="SELECT * FROM `logindetail966` WHERE `USN` ='$usn'";
$data8=mysqli_query($conn,$sql8);
$row=mysqli_num_rows($data8);
if($row)
{
while($fetch2=mysqli_fetch_assoc($data8))
{
  $username=$fetch2['USN'];
  $name=$fetch2['Name'];


  if(($usn==$username)&&($name==$nam))
  {
    //echo 'Student found';
    $alert=true;
  }
  else
  {
header('location:ReportEntry2.php?registry=369');
}

}
}
else{
  header('location:ReportEntry2.php?registry=369');

}

if($alert)
{
$sqlf="INSERT INTO `students_detail34`(`id`, `StudentName`, `USN`, `SECTION`, `TeacherName`, `UpdatedAt`, `21CS301`, `21CS302`, `21CS303`, `21CS304`, `21HU312`, `CIE`,`Obtained`, `PERCENTAGE`, `CLASS_HELD`, `CLASSES_ATTENDED`
,`21cs301a`, `21cs302a`, `21cs303a`, `21cs304a`, `21hu312a`) VALUES (NULL,'.$nam.','.$usn.','.$section.','.$teacher.',current_timestamp(),'.$cs301.','.$cs302.','.$cs303.','.$cs304.','.$hu312.',250,'.$total.','.$per.',50,'.$cgpa2.','.$cs301a.','.$cs302a.','.$cs303a.','.$cs304a.','.$hu312a.')";
$datalink=mysqli_query($conn,$sqlf);
if($datalink)
{
 echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
<strong> Data of " .$usn. " is insereted Successfuly!</strong>
<br>
<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
  <span aria-hidden='true'>&times;</span>
</button>
</div>";
include "ReportEntry2.php";
}

}
}
}
else 
{
  echo "<h2 style='color:blue;'>It seems like you are not registerd:
 <a id='moving' href='AdminLogin.php'> <button type='button'style='color:green;'>click here</button></a></h2>";
}
    }
?>

</body>
</html>