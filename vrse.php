<html>
    <head>
        <title>Result firstyear</title>
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
$db_select = mysql_select_db('secondyear',$connection);
if (!$db_select) {
	die("Database selection failed: " . mysql_error());
}
?>
 <?php include 'ppp.php'; ?>
	<?php

$sevrquery = "select * from result";
$seresult=mysql_query($sevrquery);

if(!$seresult)
{echo "sorry No result available for first year";}

?>

    <h2 style="color:red">Second Year Student Result</h2>
	<TABLE border=2 bgcolor="#F1F0E5">
	<TR><TH>ID</TH><TH>NAME</TH><TH>SUBJECT</TH><TH>SCORE</TH></TR>
   <?php
while($serow=mysql_fetch_array($seresult))
{
?>	
     <TR><TD><?php echo $serow["id"]; ?></TD><TD><?php echo $serow["name"]; ?></TD><TD><?php echo $serow["subject"]; ?></TD>
	 <TD><?php echo $serow["score"]; ?></TD></TR>

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