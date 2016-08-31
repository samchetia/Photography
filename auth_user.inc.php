<?php

    if(isset($_SESSION['user_logged']) && $_SESSION['user_logged']==1)
       {

       }
    else
       {
           header("Refresh: 3; URL=home.php");
	       echo "Not Authorized!!You are being redirected !<br>";
           echo "(If your browser doesn't support this, " .
           "<a href='home.php'>click here</a>)";
          die();
       }

       

?>