<html>
    <head>
        <title>select Paper firstyear</title>
		<script type="text/javascript">
	
        function valid()
		{
			if(frm.sub.value == "-1") 
				{ 
				alert("Error: Please Select The Subject!!!!"); 
					frm.sub.focus();
					return false; 
				} 
			if(frm.cutoff.value == "") 
				{ 
				alert("Error: Cutoff Mark cannot be blank!"); 
					frm.cutoff.focus();
					return false; 
				}
				
		}
        
    </script>
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

$query = "select name from subjects";

$result=mysql_query($query);


if(!$result)
{echo "sorry";}
/*
else
{
$row=mysql_fetch_array($result);
*/

?>
 <?php include 'ppp.php'; ?>

    <h2 style="color:red">Set Subject For First Year!!!!</h2>
    <form name="frm" action="set4done.php" method="post" onsubmit="return valid(this);">
        <select name="sub">
            <option value="-1">select Paper</option>
        <?php
        while($row=mysql_fetch_array($result))
        {
            ?>
            <option><?php echo $row["name"]; ?></option>
            <?php
        }
        ?>
        </select>&nbsp&nbsp
		&nbsp Enter Cut-Off marks: 
		<input type="text" name="cutoff">
		
		
		<br>
        <input type="submit" value="SET Paper!!!!">
            <input type="reset" value="reset">
    </form>
    
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