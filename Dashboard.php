<!DOCTYPE html>
<html lang='en'>
  <head>
  <?php 
  include 'db_conn.php';
  session_start();

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
  <body>
  <section>
    <div class='profile-card'>
      <div class='backdrop'></div>
      <div class='profile-card-top'>
       <a href='newdashboard.php'>
        <i class='fa-solid fa-arrow-left-long'></i>
        </a>
        <div>
          <i class='fa-solid fa-ellipsis-vertical'></i>
        </div>
      </div>
      <div class='profile-card-middle'>
        <div class='profile-pic'>
        
        </div>
        <h1><u>".$_SESSION['Name']."</u></h1>
        <h2>".$_SESSION['USN']."</h2>
        <br/>
        ";
         $usn=$_SESSION['USN'];
         $result="select * from `profile` where USN='$usn'";
         $result_query=mysqli_query($conn,$result);
         $num_of_rows=mysqli_num_rows($result_query);
         while($row=mysqli_fetch_assoc($result_query)){
               $img1=$row['photo'];
               echo '<img src="uploads/'.$img1.'" style="height: 160px;">';
               echo "<br/>";
               $name=$row['name1'];
               echo "<b>  Welcome ". $name. "</b>";
               echo "<br/>";
               $desc=$row['description1'];
               echo $desc;
         }

         echo "
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
           <br/>
           <ul class='performance-list'>
             <li>
             <a href='newdashboard.php' id='button' class='button bt' style='color:#fff;'>Report card</a>
             </li>
             
             <li>
               <a href='newdashboard.php' class='bt' style='color:#fff;'>Certificates</a>
               </li>
               <li>
               <a href='logout.php' style='color:#fff;'>Logout</a>
             </li>
           </ul>
             </div>";


        // Clubs Section
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
                echo $clubs;        
                echo "</div>
            </div>
      </div> 
      </div>";
        }     
}
?>



