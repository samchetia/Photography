<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="dcterms.created" content="Tue, 24 May 2016 19:12:21 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>welcomemsg.inc.php</title>
    
    <style type="text/css">
    <!--
    body {
      color:#000000;
      background-color:#FFFFFF;
      background-image:url('Background Image');
      background-repeat:no-repeat;
    }
    a  { color:#0000FF; }
    a:visited { color:#800080; }
    a:hover { color:#008000; }
    a:active { color:#FF0000; }
    -->
    </style>
    <!--[if IE]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
<?php
if(isset($_POST['user']))
echo "<h2>Welcome ".$_POST['user']."</h2>";
else
echo "<h2>Welcome".$_SESSION['username']."</h2>";
?>
  </body>
</html>