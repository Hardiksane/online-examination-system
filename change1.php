<?php
	session_start();
	//echo $_SESSION['Sname'] ;
?>

<?php
	if(isset($_SESSION['Sname']))
{
    ?>
	<html>
	<head><title>password update</title></head>
	<body bgcolor="#151B54" text="orange">
<br>
<h1 align = "center" style="color:yellow">Online Examination System</h1>
<hr size="10" style="background-color:#c00">
<center>
	
	
 <?php include 'ppp.php'; ?>
 <?php
// 1. Create a database connection

$connection = mysql_connect("localhost","root","");
if (!$connection)
{
	die("Database connection failed: " . mysql_error());
}

// 2. Select a database to use 
$db_select = mysql_select_db('secondyear',$connection);
if (!$db_select) {
	die("Database selection failed: " . mysql_error());
}
?>
<?php

$passwd=$_POST["pswd"];

//echo $s;

  
$query = "UPDATE `secondyear`.`admin` SET `password` = '$passwd'  LIMIT 1";
$result=mysql_query($query);


if(!$result)
{echo "sorry";}
else
{
    echo "<h3>Password has been set Successfully!!!!<h3>";
}
?>
<?php
        }
        else
        {
            echo "<h2>Sorry Password is not updated!!!!!!!!!</h2>";
        }
?>

</center><br><br><br><br>
<hr size="10" style="background-color:#c00">

</body>
</html>