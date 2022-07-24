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
function redirect_to( $location = NULL )
{
		if ($location != NULL)
                {
			header("Location: {$location}");
			exit;
		}
}
?>


<?php
$pwd=$_POST["password"];
$uname=$_POST["username"];
if(isset($_POST["username"]) && isset($_POST["password"]))
{

$pswdQuery="SELECT * FROM admin where username = '$uname'";

$pswdRes=mysql_query($pswdQuery);
if(!$pswdRes)
{
echo "qwe";
    //redirect_to("admin.php?logout=2");
}
    $pswdArray=mysql_fetch_array($pswdRes);
    $pswd=$pswdArray["password"];
//echo $pswd;
//echo"123";







    if($pswd == $pwd)
    {
?>        
    
<?php
	session_start();
	$_SESSION['Sname'] = "admin";
	//echo $_SESSION['Sname'] ;
?>
<html>
<head>
<style>
body {
    
	    background-image: url("welcome1.jpg");
    background-repeat: repeat-y;

}
</style>
</head>

<body bgcolor="#151B54">
<br>
<h1 align = "center" style="color:yellow">Online Examination System</h1>
<hr size="10" style="background-color:#c00">
<center>

<?php include 'ppp.php'; ?>
<?php
}
else{
redirect_to("admin.php?logout=2");
}
}
?>


 </center><br><br><br><br>
<hr size="10" style="background-color:#c00">

</body>
</html>