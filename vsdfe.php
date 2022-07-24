<html>
    <head>
        <title>Student firstyear</title>
    </head>
    <body bgcolor="#151B54" text="#11126E">
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
 <?php include 'ppp.php'; ?>
	<?php

$sdquery = "select * from registration";
$vstd=mysql_query($sdquery);

if(!$vstd)
{echo "sorry No result available for first year";}

?>

    <h2 style="color:red">First Year Student Details</h2>
	<TABLE border=2 bgcolor="#F1F0E5">
	<TR><TH>ID</TH><TH>NAME</TH><TH>MOBILE NO</TH><TH>E-MAIL</TH></TR>
   <?php
while($vsdrow=mysql_fetch_array($vstd))
{
?>	
     <TR><TD><?php echo $vsdrow["id"]; ?></TD><TD><?php echo $vsdrow["name"]; ?></TD><TD><?php echo $vsdrow["contact"]; ?></TD>
	 <TD><?php echo $vsdrow["email"]; ?></TD></TR>

      <?php  
}
        ?>
    
<?php
        }
        else
        {
            echo "<h2>Sorry Something went Wrong</h2>";
        }
?>

</center>

</body>
</html>