<html>
    <head>
        <title>QUIZ</title>
    </head>
   <body bgcolor="#151B54" text="yellow">
   <center><h1 align = "center" style="color:yellow">Online Examination System </h1>
	<br><hr size=10 style="background-color:#c00">

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
$y = $_POST["year"];
	// 1. Create a database connection

$connection = mysql_connect("localhost","root","");
if (!$connection)
{
	die("Database connection failed: " . mysql_error());
}

// 2. Select a database to use 
$db_select = mysql_select_db($y,$connection);
if (!$db_select) {
	die("Database selection failed: " . mysql_error());
}
?>
<?php
$s = $_POST["sub"];

//echo $y;






$query1 = "CREATE TABLE `$y`.`$s` (`qno` INT(5) NOT NULL, `q` TEXT NOT NULL, `a` VARCHAR(50) NOT NULL, `b` VARCHAR(50) NOT NULL, `c` VARCHAR(50) NOT NULL, `d` VARCHAR(50) NOT NULL, `ans` VARCHAR(1) NOT NULL, PRIMARY KEY (`qno`))";


$query2= "INSERT INTO `$y`.`subjects` (`name`, `noOfQue`, `setPaper`) VALUES ('$s', '0', '0')";
//$result=mysql_query($query2);
if(!mysql_query($query1) || !mysql_query($query2))
{
   //echo "sorry";
}
else
{
echo "Lets create Question Paper !!!!!!";
}

?>
<br>
<form method="post" action="start.php">
<input type="hidden" name="sub"  value="<?php echo $s; ?>">
<input type="hidden" name="year"  value="<?php echo $y; ?>">
<h2>To create Qwestion Paper </h2>

<input type="submit" value="Click here !!!!">

</form>
<?php
        }
        else
        {
            echo "<h2>Sorry Dude!!!!!!!!!</h2>";
        }
?>

<br><hr size=10 style="background-color:#c00">
</center>
</body>
</html>