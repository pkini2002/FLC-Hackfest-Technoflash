<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        <?php include 'css/docupload.css'; ?>
    </style>

    <title>Document</title>
</head>
<body>
 <div class="container">
    <h1 class="heading">Document Upload<br> and Co-curricular activity updates</h1>
    <hr>
    <p>Choose the clubs which you are a part of
    </p>
    <div class="imgcontainer">
        <div class="row">
            <div class="column">
                <img src="img/download.png" alt="">
            </div>
            <div class="column">
                <img src="img/autho1.png" alt="">
            </div>
            <div class="column">
                <img src="img/unnamed.jpg" alt="">
            </div>
            <div class="column">
                <img src="img/stereo.jpg" alt="">
            </div>
            
        </div>
    </div>
    <hr class="hr2">


    <p class="p2">Document Uploads Section</p>
     <?php
         if(isset($_GET['error'])):?> 
         <p><?php echo $_GET['error']; ?></p>
         <?php endif ?>

    <form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file" />
    <input class="sub" type="submit" name="submit" value="Upload" />
    </form>
 </div> 
 <script type="text/javascript" src="docupload.js"></script>
</body>
</html>