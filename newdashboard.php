<!DOCTYPE html>
<html lang="en">
<head>
<?php   
 include 'db_conn.php';
 session_start();
 include 'starter.php';
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="css/newdashboard.css">
    <title>Document</title>
</head>
<body>
<div class="sidebar active">
        <div class="logo_content">
            <div class="logo">
                <i class='bx bxl-c-plus-plus' style="font-size: 30px;"></i>
                <div class="logoname" style="margin-left: 5px;">NMAMIT-NITTE</div>
            </div>
            <i class='bx bx-menu-alt-right' id="btn" style="font-size: 25px;"></i>
        </div>
        <ul class="nav_list">
            <li>
                <a href="#">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link_names">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="Dashboard.php">
                    <i class='bx bx-user' ></i>
                    <span class="link_names">Profile</span>
                </a>
                <span class="tooltip">Profile</span>
            </li>
            <li>
                <a href="docupload.php">
                    <i class='bx bx-chat' ></i>
                    <span class="link_names">Doc Upload</span>
                </a>
                <span class="tooltip">Doc Upload</span>
            </li>
            <li>
                <a href="logout.php">
                    <i class='bx bx-pie-chart-alt-2' ></i>
                    <span class="link_names">Logout</span>
                </a>
                <span class="tooltip">Logout</span>
            </li>
        </ul>
        <div class="profile_content">
            <div class="profile">
                <i class='bx bx-log-out' id="log_out"></i>
            </div>
        </div>
    </div>
    <div class="home_content">
        <?php 
          $usn=$_SESSION['USN'];
          $result="select * from `profile` where USN='$usn'";
          $result_query=mysqli_query($conn,$result);
          while($row=mysqli_fetch_assoc($result_query)){
            $name=$row['name1'];
            echo " <div class='text' style='text-align:center;margin-top:30px;font-size:40px'>Welcome $name!!</div>";
          }
          echo "<h3 style='text-align:center;'>Documents Uploaded</h3>";
        ?>
         <p></p>
        <?php
             $usn=$_SESSION['USN'];
             $result="select * from `images` where USN='$usn'";
             $result_query=mysqli_query($conn,$result);
             while($row=mysqli_fetch_assoc($result_query)){
                $files_list=$row['file_name'];
                $indi_file_name=explode(",",$files_list); //used to convert string to an array
                echo "<div class='row'>";
                for ($i=0; $i <count($indi_file_name); $i++){
                   echo "<div class='container col ml-4 p-4 mr-4'  style='background-color:#11101d;'>";
                   echo "<a href='uploads/$indi_file_name[$i]'>";
                   echo "<i class='fa-solid fa-file-pdf fa-8x' style='color:red;'>";
                   echo "</i>";
                   echo "</a>";
                   echo "</div>";
                //    echo "<br/>";
                }
                echo "</div>";
             }
         ?> 
    
    </div>
    <script>
        let btn = document.querySelector("#btn");
        let sidebar = document.querySelector(".sidebar");
        let searchBtn = document.querySelector(".bx-search")

        btn.onclick = function(){
            sidebar.classList.toggle("active");
        }
        searchBtn.onclick = function() {
            sidebar.classList.toggle("active");
        }
    </script>
<?php 
   include 'end.php';
?>
</body>
</html>