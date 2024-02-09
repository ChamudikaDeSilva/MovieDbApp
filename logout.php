<?php
//logout
setcookie('loginuser',$uname,time()-86400);
header('location:loginpage.php');
?>