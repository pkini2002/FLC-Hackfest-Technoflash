<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login in</title>
        <link rel="stylesheet" href="css/newlogin.css">
        <script src="https://kit.fontawesome.com/5f457fcfc1.js" crossorigin="anonymous"></script>
       
       
    </head>
    <body>
      <?php
      require 'starter.php';
      require 'end.php';
      include 'db_conn.php';
       $method=$_SERVER['REQUEST_METHOD'];
       $flag=false;
       if($method=='POST')// it work only when we submitte form.at that time method is post.
      {
          @$usernam=$_POST['AdminId'];
          @$Password=$_POST['Password'];
          $sql8="SELECT * FROM `adminlogin2537` WHERE `AdminId` ='$usernam'";
          $data8=mysqli_query($link,$sql8);
          while($fetch2=mysqli_fetch_assoc($data8))
         {
               $username=$fetch2['AdminId'];
               $upassword=$fetch2['Password'];
               $name=$fetch2['Name'];
               if($Password==$upassword)
              {
                  $flag=true;
              }
 }
 
if($flag)
 {
 //starting the session.
 session_start();
  // $_SESSION['USN']=$username;
   $_SESSION['Name']=$name;
  header("location:ReportEntry.php?welcome=8436");
}

 else
 echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
 <strong>Oops!</strong> It seems like your are not registerd or password is incorrect.
 <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
   <span aria-hidden='true'>&times;</span>
 </button>
 </div>";
 
 }
 ?>

<div class="student"><h1>ADMIN-LOGIN</h1></div>
    <div class="container">
    <form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <div class="login-form">
    <br>
    <br>
    <div class="field">
    <span ><i class="fas fa-user"></i></span>
    <input type="text"name=AdminId placeholder="AdminId" required>
</div>
<br>
<br>
<div class="field space">
                <span class="fa fa-lock"></span>
                <input type="password" name="Password" placeholder="Password" required>
                
            </div>
            <br><br>
                <div class="btn" style="width: 100%;"><input type="submit" value="Login"></div>
                <br>

            </div>
          </form>
        </div>
</body>
</html>