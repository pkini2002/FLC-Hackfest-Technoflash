<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  

    <title>Sign in & Sign up Form</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/signin.css" />
  </head>
  <body>
     <?php
     require 'starter.php';
require 'end.php';
@$message=$_GET['thank'];
if($message==7826)
{
  echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong> See you soon!</strong>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
}


@$authenticating=$_GET['authenti'];
      require 'db_conn.php';
      $method=$_SERVER['REQUEST_METHOD'];
if($method=='POST')// it work only when we submitte form.at that time method is post.
{
  if($authenticating==4587)
  {
    $keyd=" ";
    $alert=false;
    @$usernam=$_POST['Username'];
    @$Password=$_POST['Password'];
    $sql8="SELECT * FROM `logindetail966` WHERE `USN` ='$usernam'";
    $data8=mysqli_query($conn,$sql8);
    while($fetch2=mysqli_fetch_assoc($data8))
    {
     @ $keyd=$fetch2['keyshow'];
          $username=$fetch2['USN'];
  $upassword=$fetch2['Password'];
  $name=$fetch2['Name'];

  if(password_verify($Password,$upassword))
  {
    $alert=true;
  }
}

if($alert)
{
//starting the session.
if($keyd==$username)
{
session_start();
  $_SESSION['USN']=$username;
  $_SESSION['Name']=$name;
 // header("location:Dashboard.php?welcome=8436");
 header("location:profile.php");
 }
 else
 header("location:create_profile.php");
}
else
echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
<strong>Oops!</strong> It seems like user not register or password is incorrect.
<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
  <span aria-hidden='true'>&times;</span>
</button>
</div>";

}

  else {

$tab=false;
$btn=false;
$name=$_POST['username'];
// Taking data in signup form.
@$user_id=$_POST['USN'];               // safety from xss attack.
$user_id=str_replace("<","&lt;",$user_id);// they are use to replace the string.
$user_id=str_replace(">","&gt;",$user_id);// as formate(search,replace,subject). to read <> braces as comment not as code.
@$password=$_POST['Password'];
@$cnpassword=$_POST['cnpassword'];

// inserting data into database by checking user is new user or not.
$data1="SELECT * FROM`logindetail966` WHERE`USN` ='$user_id'";
$sql=mysqli_query($conn,$data1);
$row=mysqli_num_rows($sql);
if($row)
$btn=true;
$keyshow="4n ";
//echo $row;
if(($password==$cnpassword)&&(!$row))
$tab=true;
    //echo "user already register or<br>password not match with confirm password.<br>";

if($tab)
{ $encryption=password_hash($password,PASSWORD_DEFAULT);
    $data2="INSERT INTO `logindetail966`(`Id`, `Name`, `USN`, `Password`, `RegisteredDate`,`keyshow`) VALUES (NULL,'$name','$user_id', '$encryption', current_timestamp(),'$keyshow')";
    $sql2=mysqli_query($conn,$data2);
    //var_dump($sql2);
    if($sql2)
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Registerd successfuly!</strong> Pls login again...
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
    </button>
  </div>";
}
else
{
echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
<strong>Opps!</strong> It seems like user already register or password not match with confirm password.
<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
  <span aria-hidden='true'>&times;</span>
</button>
</div>";}
}
}

?>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form action="login.php?authenti=4587" autocomplete="off" class="sign-in-form" method="post">
              <div class="logo">
                <img src="img/nitte.jpg" alt="logo1" />
                <h4>STUDENT-LOGIN</h4>
              </div>

              <div class="heading">
                <h2>Welcome Back</h2>
                <h6>Not registred yet?</h6>
                <a href="#" class="toggle">Sign up</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    name="Username"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>USN</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    name="Password"
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

            <form action="<?php echo $_SERVER['PHP_SELF'];?>" autocomplete="off" class="sign-up-form" method="post">
              <div class="logo">
                <img src="img/nitte.jpg" alt="logo1" />
                <h4>STUDENT-SIGNUP</h4>
              </div>

              <div class="heading">
                <h2>Get Started</h2>
                <h6>Already have an account?</h6>
                <a href="#" class="toggle">Sign in</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    name="username"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Name</label>
                </div>
                <div class="input-wrap">
                  <input
                    type="text"
                    name="USN"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>USN</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    name="Password"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Password</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    name="cnpassword"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Confirm-Password</label>
                </div>

                <input type="submit" value="Sign Up" class="sign-btn" />


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

    <script src="js/signin.js"></script>
  </body>
</html>