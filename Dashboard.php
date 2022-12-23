<!DOCTYPE html>
<html lang='en'>
  <head>
  <?php 
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
        <link rel='stylesheet' href='css/profile.css' />
  </head>
  <div class='bg-container'>
  </div>
  
  <body
  background='https://www.marshallsindia.com/ImageBuckets/ItemImages/ZA%201903.jpg?id=75'>
    <div class='profile-card'>
      <div class='backdrop'></div>
      <div class='profile-card-top'>
        <i class='fa-solid fa-arrow-left-long'></i>
        <div>
          <i class='fa-solid fa-ellipsis-vertical'></i>
        </div>
      </div>
      <div class='profile-card-middle'>
        <div class='profile-pic'>
          <i class='fa-solid fa-circle-check'> 
          </i>
        </div>
        <h1><u>".$_SESSION['Name']."</u></h1>
        <h2>".$_SESSION['USN']."</h2>
        <p>
          ".$_SESSION['Name']." of 3rd Sem studying under Computer Science. An avid fan of coding.
        </p>
        </p>
        <div class='social-data'>
          <div>
            <h5>Attendance</h5>
            <span>87%</span>
          </div>
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
          <ul class='performance-list'>
            <li>
              <a href='markpage.html'>Report Card</a>
            </li>
            
           
            <li>
              <a href='certificates/Aditi-Shukla-12-14-2022.pdf'>Certificates</a>
              </li>
              <li>
              <a href='logout.php'>Logout</a>
            </li>
          </ul>
            </div>
        <div class='clubs'>
            <h3><u>Clubs</u></h3>
            <div class='container'></div>
                <div class='imgcontainer'>
                  <div class='row'>
                      <div class='column'>
                          <img src='img/download.png' alt=''>
                      </div>
                      <div class='column'>
                        <img src='img/autho1.png' alt=''>
                    </div>
                    <div class='column'>
                        <img src='img/stereo.jpg' alt=''>
                    </div>
                    <div class='column'>
                      <img src='img/unnamed.jpg' alt=''>
                  </div>
                  <div class='column'>
                    <img src='img/cs-ace.jpg' alt=''>
                </div>
                  </div>
              </div>
        </div>
        <div class='social-icons'>
          <div>
            <i class='fa-brands fa-linkedin'></i>
          </div>
          <div>
            
               <i class='fas fa-envelope'></i>
          </div>
        
          <div>
            <i class='fa-brands fa-github'></i>
          </div>
        </div>
      </div>
      
    </div>
    "
  ;}
    else 
  {
    echo "<h2 style='color:blue;'>It seems like you are not registerd:
   <a id='moving' href='login.php'> <button type='button'style='color:green;'>click here</button></a></h2>";
  }
  
  ?>
  </body>
</html>