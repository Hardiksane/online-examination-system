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
$db_select = mysql_select_db('thirdyear',$connection);
if (!$db_select) {
	die("Database selection failed: " . mysql_error());
}
?>
 <?php include 'ppp.php'; ?>
	<?php

$fevrquery = "select * from result";
$feresult=mysql_query($fevrquery);

if(!$feresult)
{echo "sorry No result available for first year";}

?>

    <h2 style="color:red">Third Year Student Result</h2>
	<TABLE border=2 bgcolor="#F1F0E5">
	<TR><TH>ID</TH><TH>NAME</TH><TH>SUBJECT</TH><TH>SCORE</TH></TR>
   <?php
while($ferow=mysql_fetch_array($feresult))
{
?>	
     <TR><TD><?php echo $ferow["id"]; ?></TD><TD><?php echo $ferow["name"]; ?></TD><TD><?php echo $ferow["subject"]; ?></TD>
	 <TD><?php echo $ferow["score"]; ?></TD></TR>

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