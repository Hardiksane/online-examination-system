<?php
session_start();
function redirect_to( $location = NULL )
{
		if ($location != NULL)
                {
			header("Location: {$location}");
			exit;
		}
}



$_SESSION = array();

if(isset($_COOKIE[session_name()]))
{
    setcookie(session_name(),'',time()-420000,'/');
}

session_destroy();
redirect_to("admin.php?logout=1");
?>