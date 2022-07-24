<?php
 $y = $_POST["yr"];
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
<title>exam over</title>
<style>
h1 { 
color: yellow;
}
h2{
color: #00ff00
}
</style>
</head>
<body bgcolor="#151B54" text="yellow">
<center><br><br>
<img src="result.jpg" alt="result_page" /><br>
<hr size=10 style="background-color:#c00"><br> 
<?php
$id=$_POST["id"];
$password=$_POST["password"];
$sub=$_POST["subject"];


  
$nameQuery="select name from registration where id= $id and password='$password'";

$nameRes=mysql_query($nameQuery);
if(!$nameRes)
{
    echo "sorry1";
    exit;
}
    $rowname=mysql_fetch_array($nameRes);
    $name=$rowname["name"];
    //calculation of score
    
    $ansQuery="select ans from $sub ";
    $ansResult=mysql_query($ansQuery);
    if(!$ansResult)
    {
        echo "sorry2";
        exit;
    }
    //$rowAns=mysql_fetch_array($ansResult)
    
    //$count=mysql_num_rows($ansResult);
    //echo "Count : ".$count;
    $i=1;
    $cnt=0;
    
    while($rowAns=mysql_fetch_array($ansResult))
    {
        if(!empty($_POST[$i]))
{
$ans=$_POST[$i];
//echo $ans;
//echo $ans;
if($ans==$rowAns["ans"])
{
$cnt++;
}
        }
$i=$i+1;
    }
    //echo $cnt;
     //validate if already exam given
   /* $evalidate="select name,score from result where id=$id && name=$name && subject=$sub";
	$ename=mysql_query($evalidate);
	//$ecount=mysql_num_rows($ename);
	if(!$ename)
	{
		$edata=mysql_fetch_array($ename);
		$sname=$edata["name"];
		$escore=$ename["score"];
    echo "The".$sname."is already attempted the exam and score is".$escore.".";
	}
	else
	{*/
    $scoreEntry="insert into result values($id,'$name','$sub',$cnt)";
    if(!mysql_query($scoreEntry))
    {
        echo "sorry";
    }
	//}

/////////////////////////////

$cutoffQuery="SELECT cutoff FROM subjects where name= '$sub' ";

$cutoffRes=mysql_query($cutoffQuery);
if(!$cutoffRes)
{
    echo "sorry1";
    exit;
}
else
{
    $cut=mysql_fetch_array($cutoffRes);
    $cutoffmarks=$cut["cutoff"];
	echo "<center><br>";
	echo "<h2>You have scored Total Marks: </h2><h1>&nbsp&nbsp&nbsp".$cnt."<BR>";
	echo "</h1>";
	if($cnt >= $cutoffmarks)
	{
	echo "<br>" ;
	echo ' <img src="congo.gif" alt="pass" /> ';
	
	//<img src="congo.gif" alt="pass">
	
	
	}
	else
	{
	echo "<br><br><h1> Sorry Your are Not Clear this Exam... Best Of Luck For Next Time...</h1>";
	}
	echo "</center>";
  }
        
    
?>  
 
        <br><br>
		<a href="index.php"><h2>Go To Home Page</a>
   <hr size=10 style="background-color:#c00"><br>     
</center>

</body>
</html>
