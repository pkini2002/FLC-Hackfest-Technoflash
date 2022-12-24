<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='css/create_profile.css' />
    <title>Create Profile</title>
</head>
<body class='container'>
<h1 class='page-title'>
    Welcome! Create your profile page
  </h1>
  <form class='form' action='datastore.php' method='POST' enctype="multipart/form-data">
    <input type='text' class='form-input' placeholder='Enter your name' name='name'>
    <input type='text' class='form-input' placeholder='Enter your usn' name='usn'>
    <input type='text' class='form-input' placeholder='Description or Bio' name='bio'>
    <input type='text' class='form-input' placeholder='Enter your email' name='email'>
    <input type='text' class='form-input' placeholder='Enter your Linkedin URL' name='linkedin'>
    <input type='text' class='form-input' placeholder='Enter your Github URL' name='github'>
    <input type="file" name="file" />
    <input type='submit' value='submit' name='submit' class='send-btn btn'>
  </form>
</body>
</html>

  
