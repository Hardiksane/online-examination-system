
<html>
    <head>
        <title>View student details</title>
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
 <h1 style="color:red">Select Year to View Student Details </h1>
<table>
    <tr bgcolor="#cf0"><th><h3><a href="vsdfe.php">For First Year!!!!</a></h3></th></tr>
       <tr bgcolor="#bf0"><th><h3> <a href="vsdse.php">For Second Year!!!!</a></h3></th></tr>
        <tr bgcolor="yellow"><th><h3><a href="vsdte.php">For Third Year!!!!</a></h3></th></tr>
        
		</table>
    
<?php
        }
        else
        {
            echo "<h2>Sorry Dude!!!!!!!!!</h2>";
        }
?>
<br><br><hr size=10 style="background-color:#c00"><br> 
</center>
</body>
</html>