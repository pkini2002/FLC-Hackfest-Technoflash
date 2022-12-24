<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <div class="profile_details">
                    <img src="https://vz.cnwimg.com/wp-content/uploads/2014/01/alex.jpg?x86007" alt="">
                    <div class="name_job">
                        <div class="name">Name</div>
                        <div class="job">Role</div>
                    </div>
                </div>
                <i class='bx bx-log-out' id="log_out"></i>
            </div>
        </div>
    </div>
    <div class="home_content">
        <div class="text">Home Content Here...</div>
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
</body>
</html>