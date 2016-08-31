<?php

session_start();
include "conn.inc.php";
if(isset($_POST['submit']))
{
$user = mysql_real_escape_string($_POST['user']);
$password = mysql_real_escape_string($_POST['pass']);

$query = "select username,password from admin where username='$user' and password='$password'";
$result = mysql_query($query) or die(mysql_error());

if(mysql_num_rows($result)==1)
{
$_SESSION['user_logged']=1;
$_SESSION['username']=$user;
$_SESSION['password']=$password;
}else
{
header("Refresh: 5; URL=index.php");
echo "Invalid login!!! you are being redirected to login page!<br<br>";
echo "(If your browser doesn't support this,".
"<a href='index.php'>Click here</a>";
die();
}
}
else
{

include "auth_user.inc.php";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="dcterms.created" content="Tue, 24 May 2016 08:28:35 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Admin</title>

    <!--[if IE]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>

  </head>
  <body>
   <div id="Layer1" style="position:absolute; width:477px; height:273px; z-index:1; left: 302px; top: 137px; background-color: #f5f5f5; layer-background-color:#ff00ff; text-decoration:none; border: 3px none #000000;">

  <?php include "welcomemsg.inc.php"; ?>
 <p><b><a class="two" href="menu.html" >Your HomePage click here</a></b></p>
<p><b><a class="two" href="personal.php">Click here to view your personal Information</a></b></p><p><b><a class="two" href="logout.php">Log Out</a></b></p></div>

  </body>
</html>