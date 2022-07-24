
<html>
<head>
<title>set success firstyear</title>
</head>
<body bgcolor="#151B54" text="yellow">
	<center><h1 align = "center" style="color:yellow"><br>Online Examination System </h1>
	<br><br><hr size=10 style="background-color:#c00"><br> <br>

<?php
	session_start();
	//echo $_SESSION['Sname'] ;
?>

<?php
	if(isset($_SESSION['Sname']))
{
    ?>
 <?php include 'ppp.php'; ?>
 <?php
// 1. Create a database connection

$connection = mysql_connect("localhost","root","");
if (!$connection)
{
	die("Database connection failed: " . mysql_error());
}

// 2. Select a database to use 
$db_select = mysql_select_db('firstyear',$connection);
if (!$db_select) {
	die("Database selection failed: " . mysql_error());
}
?>
<?php

$s=$_POST["sub"];
$cutoff=$_POST["cutoff"];
//echo $s;

  
$query = "UPDATE `firstyear`.`subjects` SET `setPaper` = '1', `cutoff` = '$cutoff' WHERE `subjects`.`name` = '$s' LIMIT 1";
$query1 = "UPDATE `firstyear`.`subjects` SET `setPaper` = '0' WHERE `subjects`.`name` != '$s'";

$result=mysql_query($query);
$result1=mysql_query($query1);


if(!$result && !$result1)
{echo "sorry";}
else
{
    echo "<h1>Paper has been set Successfully!!!!</h1>";
}
?>
<?php
        }
        else
        {
            echo "<h2>Sorry Dude!!!!!!!!!</h2>";
        }
?>
<br><br><hr size=10 style="background-color:#c00"><br> <br>
</center>
</body>
</html>