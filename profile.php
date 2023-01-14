
 <!DOCTYPE html>
<html lang='en'>
  <head>
  <?php 
  include 'db_conn.php';
  session_start();
  // it will work if you create alert message work.
  // $welcome=$_GET['welcome'];
  // if($welcome==8436)
  // { include 'starter.php';
  //   include 'end.php';
  //   echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  //   <strong> successfuly logedin!</strong>
  //   <br>
  //   <strong> Welcome Back " .$_SESSION['Name']."</strong>
  //   <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
  //     <span aria-hidden='true'>&times;</span>
  //   </button>
  // </div>";
  // }
  if(isset($_SESSION['USN']))
  {
    
  echo "
  <meta charset='UTF-8' />
  <meta http-equiv='X-UA-Compatible' content='IE=edge' />
  <meta name='viewport' content='width=device-width, initial-scale=1.0' />
  
  <title>Profile</title>
  <link
    rel='stylesheet'
    href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css'
  />
  <link rel='icon' type='image/x-icon' href='img/favicon.ico'>
      <link rel='stylesheet' href='css/style1.css' />
</head>
<div class='bg-container'>
</div>

<body>
  <div class='profile-card'>
    <div class='backdrop'></div>
    <div class='profile-card-top'>
  <i class='fa-solid fa-arrow-left-long'></i>

  <div>
    <ul>

      <li>
        <a href='#'> <i class='fa-solid fa-ellipsis-vertical'></i></a>
        <ul class='dropdown'>
         <li><a href='newdashboard.php'><i class='fa fa-home'></i> Dashboard</a></li>
         <li><a href='create_profile.php'><i class='fa fa-edit'></i> Edit</a></li>
         <li><a href='credit.html'><i class='fa fa-id-card'></i> Aboutus</a></li>
         <hr>
         <li><a href='logout.php'><i class='fa fa-sign-out'></i>Logout</a></li>
        </ul>
        </li>
  </div>
</div>
   

";?>
<?php

      $usn=$_SESSION['USN'];
      $sql8="SELECT * FROM `profile` WHERE `USN` ='$usn'";
      $data8=mysqli_query($conn,$sql8);
      while($fetch2=mysqli_fetch_assoc($data8))
      {
            $img1=$fetch2['photo'];
            $name=$fetch2['name1'];
            $desc=$fetch2['description1'];
      }
     
echo "
<div class='profile-card-middle'>
<div class='fa-solid fa-circle-check'>
<img src='uploads/$img1'style='
position: relative;
  width: 150px;
  height: 150px;
  border-radius: 50%;
  background-size: cover;
  cursor: pointer;
  margin-bottom: 0.5rem;
  transition: box-shadow 0.3s ease-in-out;'>
 
          
      </div>
      <h1><u>".$_SESSION['Name']."</u></h1>
<h1>".$_SESSION['USN']."</h1>
      <p><b>
       ".$desc."
      
      </b></p>

       <div class='social-data'>
      <div>
        <h5>CGPA</h5>
        <span>9.4</span>
      </div>
      <div>
        <h5>SGPA</h5>
        <span>8.6</span>
      </div>
    </div>
    <div class='performance'>
      <h3><u>Performance</u></h3>
      <br/>
      <ul class='performance-list'>
        <li>
        <a href='newdashboard.php' id='button' class='button bt'>Report card</a>
        </li>
        
        <li>
          <a href='newdashboard.php' class='bt'>Certificates</a>
          </li>
          <li>
          <a href='logout.php'>Logout</a>
        </li>
      </ul>
        </div>";

          $result="select * from `images` where USN='$usn'";
          $result_query=mysqli_query($conn,$result);
          while($row=mysqli_fetch_assoc($result_query)){
          echo "
            <hr>
            <div class='clubs'>
            <h3><u>Clubs</u></h3>
            <div class='container'></div>
                <div class='imgcontainer'>
                  <div class='row'>";  
                  $clubs=$row['clubs'];
                  $res=explode(',',$clubs);
                  // echo $clubs;
                  
                  // echo $clubs; 
                  foreach ($res as $club) {
                    if($club == 'FLC'){
                      echo "<img src='img/download.png' width='80' height='70'>";
                      echo "&nbsp;&nbsp;";
                    }
                    if($club == 'Stereo'){
                      echo "<img src='img/stereo.jpg' width='80' height='70'>";
                      echo "&nbsp;&nbsp;";
                    }
                    if($club == 'Ace'){
                      echo "<img src='img/cs-ace.jpg' width='80' height='70'>";
                      echo "&nbsp;&nbsp;";
                    }
                    if($club == 'Authorcraft'){
                      echo "<img src='img/autho1.png' width='80' height='70'>";
                      echo "&nbsp;&nbsp;";
                    }
  
                    if($club == 'Aero'){
                      echo "<img src='img/unnamed.jpg' width='80' height='70'>";
                      echo "&nbsp;&nbsp;";
                    }
  
                    if($club == 'Rachana'){
                      echo "<img src='img/rachana.jpg' width='80' height='70'>";
                      echo "&nbsp;&nbsp;";
                    }
  
                    if($club == 'NitteBlues'){
                      echo "<img src='img/football.jpg' width='80' height='70'>";
                      echo "&nbsp;&nbsp;";
                    }
  
                    if($club == 'Robotics'){
                      echo "<img src='img/White Logo.png' width='80' height='70'>";
                      echo "&nbsp;&nbsp;";
                    }
                      echo "<br/>";
                  }
                         
                  echo "</div>
              </div>
        </div> 
        </div>";
          }    


          $result="select * from `profile` where USN='$usn'";
          $result_query=mysqli_query($conn,$result);
          while($row=mysqli_fetch_assoc($result_query)){
          $linkedin_url=$row['linkedinurl'];
          $email_url=$row['emailurl'];
          $github_url=$row['githuburl'];
          echo "
          <div class='social-icons'>
          <div>
            <a href='$linkedin_url'>
            <i class='fa-brands fa-linkedin'></i>
            </a>
          </div>
    
          <div>
              <a href='$email_url'>
              <i class='fas fa-envelope'></i>
              </a>
          </div>
        
          <div>
            <a href='$github_url'>
            <i class='fa-brands fa-github'></i>
            </a>
          </div>
        </div>";
          } 
    }
    
  else 
{
  echo "<h2 style='color:blue;'>It seems like you are not registerd:
 <a id='moving' href='login.php'> <button type='button'style='color:green;'>click here</button></a></h2>";
}

?>
</body>
</html>