<?php

$y = $_GET["year"];
//echo $y;
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
<html>
<head>
<style>
h1 { 
color: yellow;
}
h2{
color: #00ff00
}
hr{
height: 10px;
background-color: #c00;
}

</style>
</head>
<body bgcolor="#151B54" text="red">
<?php

  
  $sql="INSERT INTO registration VALUES(NULL,'$_GET[name]',$_GET[mob_no],'$_GET[email]','$_GET[password]')";

// Execute query
if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
else
{
echo "<center>";
echo "<br><h2>You Have Successfully Registered for Online Examination </h2>";
echo "<hr>";
$query1=" select id from registration where password = '$_GET[password]' and name='$_GET[name]'and contact='$_GET[mob_no]'";
$result1=mysql_query($query1);
if(!$result1)
{
    echo "sorry";
}
else
{
$row=mysql_fetch_array($result1);
echo "<br>";
echo "<h2>Your <b>Examination ID</b> is : <h1>".$row["id"];
echo "</h2>";
echo "<p><h3>Please note this Examination ID which is Required for login<h3></p> <br>";
//echo "<marquee>";
//echo ' <img src="regid.jpg" alt="regid" /> ';
//echo "</marquee>";

    
}
}
mysql_close($connection);
?>
<a href=login.php align="center"><h3 style="color:orange">STUDENT LOGIN</h3></a>
<marquee><img src="regid.jpg" alt="regid" /> </marquee>
<hr>
</center>
</body>
</html>