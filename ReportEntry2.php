<?php
 
 require 'starter.php';
require 'end.php';
@$message=$_GET['registry'];
if($message==369)
{
echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
<strong> Sorry! student is not registered</strong>
<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
<span aria-hidden='true'>&times;</span>
</button>
</div>";
}

@$message2=$_GET['updated'];
if($message2==500)
{
echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
<strong> yah! student data is updated</strong>
<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
<span aria-hidden='true'>&times;</span>
</button>
</div>";
}
      session_start();
    if(isset($_SESSION['Name']))
    {
     
        @$welcome=$_GET['welcome'];
        if($welcome==8436)
       { 
         echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
         <strong> Welcome Back " .$_SESSION['Name']."</strong>
         <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
           <span aria-hidden='true'>&times;</span>
         </button>
       </div>";
       }
    echo '
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
    <link rel="stylesheet" href="css/marks.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    
    <div class="space">
        
        <ul>
            <li><h2>ADMINS SPACE</h2></li>
            &emsp;&emsp;
          <li>
            <a href="#"> <i class="fa-solid fa-ellipsis-vertical"></i></a>
            <ul class="dropdown">
             <li><a href="logoutadmin.php"><i class="fa fa-sign-out"></i>Logout</a></li>
            </ul>
            </li>
      </div>
      <form action="ReportEntry.php" method="POST">
    <table bgcolor="black" border="0" align="center">
<tr bgcolor="#FFFACD">
            <th width="150" style="text-align:center">USN</th>
            <th width="465" style="text-align:left"><input type="text" name="USN">    </th>
        </tr>
<tr bgcolor="#EEE8AA">
            <th style="text-align:center">NAME</th>
            <th style="text-align:left"><input type="text" name="naame">      </th>
        </tr>
<tr bgcolor="#FFFACD">
            <th style="text-align:center"> SECTION</th>
            <th style="text-align:left"><input type="text" name="Class">   </th>
        </tr>
</table>
<br>
<table bgcolor="black" border="0" align="center">
    <tr bgcolor="#DAA520">
                    <th width="130" style="text-align:center"> Subject Code </th><br>
                    <th width="130" style="text-align:center"> CIE </th>
                    <th width="130" style="text-align:center"> GRADE </th>
                    <th width="130" style="text-align:center">CLASSES HELD </th>
                    <th width="130" style="text-align:center">CLASSES ATTENDED</th>
                </tr>
    <tr bgcolor="#FFFACD">
                    <td style="text-align:center" placeholder="21CS301">21CS301</td>
                    <td style="text-align:center"><input class="input" type="number" name="subcode1" placeholder="CIE"></td>
                    <td style="text-align:center"><placeholder="GRADE">GRADE</td>
                    <td style="text-align:center"><placeholder="total">50</td>
                    <td style="text-align:center"><input class="input" type="number"name="subcode1a"  placeholder="obtained"></td>
                </tr>
    <tr bgcolor="#EEE8AA">
        <td style="text-align:center" placeholder="21CS302">21CS302</td>
        <td style="text-align:center"><input class="input" type="number" name="subcode2" placeholder="CIE"></td>
        <td style="text-align:center"> <placeholder="GRADE">GRADE</td>
        <td style="text-align:center"><placeholder="total">50</td>
        <td style="text-align:center"><input class="input" type="number" name="subcode2a"  placeholder="obtained"></td>                </tr>
    <tr bgcolor="#FFFACD">
        <td style="text-align:center" placeholder="21CS303">21CS303</td>
        <td style="text-align:center"><input class="input" type="number"  name="subcode3" placeholder="CIE"></td>
        <td style="text-align:center"><placeholder="GRADE">GRADE</td>
        <td style="text-align:center"><placeholder="total">50</td>
        <td style="text-align:center"><input class="input" type="number" name="subcode3a"  placeholder="obtained"></td>                </tr>
    <tr bgcolor="#EEE8AA">
        <td style="text-align:center" placeholder="21CS304">21CS304</td>
        <td style="text-align:center"><input class="input" type="number"  name="subcode4" placeholder="CIE"></td>
        <td style="text-align:center"><placeholder="GRADE">GRADE</td>
        <td style="text-align:center"><placeholder="total">50</td>
        <td style="text-align:center"><input class="input" type="number" name="subcode4a" placeholder="obtained"></td>                </tr>
    <tr bgcolor="#FFFACD">
        <td style="text-align:center" placeholder="21HU312">21HU312</td>
        <td style="text-align:center"><input class="input" type="number"  name="subcode5" placeholder="CIE"></td>
        <td style="text-align:center"><placeholder="GRADE">GRADE</td>
        <td style="text-align:center"><placeholder="total">50</td>
        <td style="text-align:center"><input class="input" type="number" name="subcode5a" placeholder="obtained"></td>                </tr>
             </tr>
                <tr bgcolor="#FFFACD">
                    <td style="text-align:center"><button type="submit" value="submit">
                        ADD
                    </button></td>
                    <td style="text-align:center">  </td>
                    <td style="text-align:center">  </td>
                    <td style="text-align:center">  </td>
                    <td style="text-align:center">  </td>
                </tr>
    </table>
    
    <button class="btn"  type="submit" value="submit">
     submit
    </button>
</form>
</div>
';}
else 
{
  echo "<h2 style='color:blue;'>It seems like you are not registerd:
 <a id='moving' href='AdminLogin.php'> <button type='button'style='color:green;'>click here</button></a></h2>";
}
?>

</body>
</html>