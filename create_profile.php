<!DOCTYPE html>
<html lang="en">
<head>
<?php 
  session_start();
  if(isset($_SESSION['USN']))
  {
   
    require 'starter.php';
require 'end.php';
@$message=$_GET['error'];
if($message==440)
{
 echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
 <strong> Sorry,usn or name not match!</strong>
 <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
   <span aria-hidden='true'>&times;</span>
 </button>
</div>";
}
    echo "
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='css/create_profile.css' />
    <title>Create Profile</title>
</head>
<body class='container' style='background-color: #11101d;'>
<h1 class='page-title'>
    Welcome! Create your profile page
  </h1>
  <form class='form' action='datastore.php' method='POST' enctype='multipart/form-data'>
    <input type='text' class='form-input' placeholder='Enter your name' name='name'>
    <input type='text' class='form-input' placeholder='Enter your usn' name='usn'>
    <input type='text' class='form-input' placeholder='Description or Bio' name='bio'>
    <input type='text' class='form-input' placeholder='Enter your email' name='email'>
    <input type='text' class='form-input' placeholder='Enter your Linkedin URL' name='linkedin'>
    <input type='text' class='form-input' placeholder='Enter your Github URL' name='github'>
    <input type='file' name='file'>
    <input type='submit' value='submit' name='submit' class='send-btn btn'>
  </form>
</body>
</html>
";
  }
  else 
  {
    echo "<h2 style='color:blue;'>It seems like you are not registerd:
   <a id='moving' href='login.php'> <button type='button'style='color:green;'>click here</button></a></h2>";
  }
  ?>

  
