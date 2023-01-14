<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ADMIN-LOGIN</title>
    <link rel="stylesheet" href="css/admin.css" />
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
        @$Password=$_POST['password'];
        $sql8="SELECT * FROM `adminlogin2537` WHERE `AdminId` ='$usernam'";
        $data8=mysqli_query($conn,$sql8);
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
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form action=<?php echo $_SERVER['PHP_SELF'];?> autocomplete="off" class="sign-in-form" method="POST">
              <div class="logo">
                <img src="img/nitte.jpg" alt="logo1" />
                <h4>ADMIN-LOGIN</h4>
              </div>

              <div class="heading">
                <h2>Welcome Back</h2>
                <!-- <h6>Not registred yet?</h6>
                <a href="#" class="toggle">Sign up</a> -->
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    minlength="4"
                    name="AdminId"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Admin Id</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    name="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Password</label>
                </div>

                <input type="submit" value="Sign In" class="sign-btn" />

                <p class="text">
                 
                  <a href="#">Forgot password?</a>
                </p>
              </div>
</form>
          </div>

          <div class="carousel">
            <div class="logo1"><img src="img/nmamit3.png" alt="logo" style="    
            display: inline;
            width: 100%;
            overflow:hidden;
             "></div>
            <img src="img/nmam1.jpg" alt="photo" style=" position: relative;
            top: 10%;
            height:100%;
            width: 100%;
            overflow:hidden;" >
            </div>

            <div class="text-slider">
              
              </div>

              
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Javascript file -->

    <script src="js/admin.js"></script>
  </body>
</html>
