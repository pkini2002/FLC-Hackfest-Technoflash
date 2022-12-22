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
    <form action="POST">
    <div class="flcontainer">
        
        <p class="p3">Attendance Proof docs:</p>
        <div class="lcontainer">
        <label for="att"><span id="imgname"></span>
        <input id="att" type="file"></label>
    </div>
    </div>
  
    <div class="flcontainer">
        <p class="p3">Internship Completion docs:</p>
        <div class="lcontainer">
        <label for="att2"><span id="imgname2"></span>
        <input id="att2" type="file"></label>
    </div>
    </div>
  
    <div class="flcontainerd">
        <p class="p3">Course Completion docs:</p>
        <div class="lcontainer">
        <label for="att3"><span id="imgname3"></span>
        <input id="att3" type="file"></label>
    </div>

    </div>
    <input class="sub" type="submit" value="SUBMIT">
</form>

 </div> 
 <script type="text/javascript" src="docupload.js"></script>
</body>
</html>