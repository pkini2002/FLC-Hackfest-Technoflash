<?php
// logout from session.
session_start();
session_unset();
session_destroy();
header("location:AdminLogin.php?thank=7726");
?>