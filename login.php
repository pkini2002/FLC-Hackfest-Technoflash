<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        <?php include 'css/login.css'; ?>
    </style>
    <script src="https://kit.fontawesome.com/5f457fcfc1.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="background">
        <h1 class="login">STUDENT-LOGIN</h1>
        <div class="content">
            <img src="img/nitte.jpg" alt="logo">
            <form  action="#" method="#">
                <div class="field">
                    <span ><i class="fas fa-user"></i></span>
                    <input type="text" placeholder="Username" required>
                </div>
                <div class="field space">
                    <span class="fa fa-lock"></span>
                    <input type="password" placeholder="Password" required>
                    
                </div>
               
                <div class="field space1">
                   
                    <input type="submit" value="LOGIN" required>
                </div>
                
            </form>
            <div class="forgtet-pass input">
                <a href="#">Forgot Password?</a>
            </div>
        </div>
    </div>
   
</body>
</html>