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
            <form action="upload.php" method="POST" enctype="multipart/form-data">
                <ul>
                    <li>
                      <input type="checkbox" id="myCheckbox1" name="ids[]" value="FLC" />
                      <label for="myCheckbox1"><img src="img/download.png" alt=""></label>
                    </li>
                    <li>
                </li>
                </ul>
            </div>
            <div class="column">
                <ul>
                    <li>
                      <input type="checkbox" id="myCheckbox2" name="ids[]" value="Authorcraft" />
                      <label for="myCheckbox2"><img src="img/autho1.png" alt=""></label>
                    </li>
                    <li>
                </li>
                </ul>
            </div>
            <div class="column">
                <ul>
                    <li>
                      <input type="checkbox" id="myCheckbox3" name="ids[]" value="Stereo" />
                      <label for="myCheckbox3"><img src="img/stereo.jpg" alt=""></label>
                    </li>
                    <li>
                </li>
                </ul>
            </div>
            <div class="column">
                <ul>
                    <li>
                      <input type="checkbox" id="myCheckbox4" name="ids[]" value="Aero" />
                      <label for="myCheckbox4"><img src="img/unnamed.jpg" alt=""></label>
                    </li>
                    <li>
                </li>
                </ul>
            </div>
            <div class="column">
                <ul>
                    <li>
                      <input type="checkbox" id="myCheckbox5" name="ids[]" value="Ace" />
                      <label for="myCheckbox5"><img src="img/cs-ace (1).jpg" alt=""></label>
                    </li>
                    <li>
                </li>
                </ul>
            </div>
            <div class="column">
                <ul>
                    <li>
                      <input type="checkbox" id="myCheckbox6" name="ids[]" value="Rachana" />
                      <label for="myCheckbox6"><img src="img/rachana.jpg" alt=""></label>
                    </li>
                    <li>
                </li>
                </ul>
            </div>
            <div class="column">
                <ul>
                    <li>
                      <input type="checkbox" id="myCheckbox7" name="ids[]" value="NitteBlues" />
                      <label for="myCheckbox7"><img src="img/football.jpg" alt=""></label>
                    </li>
                    <li>
                </li>
                </ul>
            </div>
            <div class="column">
                <ul>
                    <li>
                      <input type="checkbox" id="myCheckbox8" name="ids[]" value="Robotics" />
                      <label for="myCheckbox8"><img src="img/White Logo.png" alt=""></label>
                    </li>
                    <li>
                </li>
                </ul>
            </div>
        </div>
        </div>
    <hr class="hr2">


   
     <?php
         if(isset($_GET['error'])):?> 
         <p><?php echo $_GET['error']; ?></p>
         <?php endif ?>

 

    <!-- Document upload section -->
    <p class="p2"><b>Document Uploads Section</b></p>
    <br/>
    <br/>
    <center>
    <div style="background-color:#c3c4c7; width:80%;height:80px; padding:4px;">
    <p>Attendance Proof Docs</p>
    <br/>
    <input type="file" name="file1" />
    </div>
    <br/>
    
    <div style="background-color:#c3c4c7; width:80%;height:80px; padding:4px;">
    <p>Internship Completion Docs</p>
    <br/>
    <input type="file" name="file2" />
    </div>

    <br/>

    <div style="background-color:#c3c4c7; width:80%;height:80px; padding:4px;">
    <p>Course Completion Docs</p>
    <br/>
    <input type="file" name="file3" />
    </div>
    <input class="sub" type="submit" name="submit" value="Upload" />
    </center>
    </form>
 </div> 
 <script type="text/javascript" src="docupload.js"></script>
</body>
</html>