<html>
    <head>
        <title>next question</title>
    </head>
    <body bgcolor="#151B54" text="yellow">
	<center><h1 align = "center" style="color:yellow"><br>Online Examination System </h1>
	<br><br><hr size=10 style="background-color:#c00">

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
$y = $_POST["year"];

?>

<?php
$q_no = $_POST["q_no"];
$q = $_POST["q"];
$a = $_POST["a"];
$b = $_POST["b"];
$c = $_POST["c"];
$d = $_POST["d"];
$ans = $_POST["ans"];

//inserting into database!!!!!!!
$query="INSERT INTO $s VALUES($q_no,'$q','$a','$b','$c','$d','$ans')";

// Execute query
if (!mysql_query($query,$connection))
  {
  die('Error: ' . mysql_error());
  }
else
{
    ?>
    
<form method="post" action="start.php">
<input type="hidden" name="sub"  value="<?php echo $s; ?>">
<input type="hidden" name="year"  value="<?php echo $y; ?>">
For next Question 

<input type="submit" value="Click here !!!!">

</form>
<?php
}
mysql_close($connection);

//echo "Q NO : {$q_no} <br><br> ";
//echo strip_tags(nl2br("Q :{$q}"),"<h1><br><a><p><b>");
//echo "<br>A :<br> {$a}<br>";
//echo "B :<br> {$b}<br>";
//echo "C :<br> {$c}<br>";
//echo "D :<br> {$d}<br>";
//echo "ANS :<br> {$ans}";
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