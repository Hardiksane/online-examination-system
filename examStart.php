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
function redirect_to( $location = NULL )
{
		if ($location != NULL)
                {
			header("Location: {$location}");
			exit;
		}
}

if(isset($_POST["id"]) && isset($_POST["password"]))
{
$id=$_POST["id"];
$password=$_POST["password"];

  $validate="select id,password from registration where id=$id and password='$password' ";
$isvalid=mysql_query($validate);
if(!$isvalid)
{
    echo "You are not registered student";
	
}
else
{
    $row=mysql_fetch_array($isvalid);
    $a=$row["id"];
    $b=$row["password"];
    //echo $a."   ".$b;
    if($id==$a && $password==$b)
    {
        //displaying paper!!!
        $subjectQuery="select name from subjects where setPaper=1";
        $res=mysql_query($subjectQuery);
        if(!$res)
        {
            echo "sorry!!";
            exit;
            }
            else
            {
                $row1=mysql_fetch_array($res);
                $pmd = $row1["name"];
                //echo $pmd;
                }
                
                //validation : user don't have 2nd chance to attempt same paper 
                $secondEntryValidation="select id,subject from result where id=$id && subject='$pmd'";
    $resultSecondEntry=mysql_query($secondEntryValidation);
    $rowSecondEntry=mysql_fetch_array($resultSecondEntry);
    $count=mysql_num_rows($resultSecondEntry);
    
    //echo $count;
    
    
    if($count==0)
    {
    
                
                $query123="select * from $pmd ";
                $result123=mysql_query($query123);
                if(!$result123)
                {
                    echo "sorry123!!";
                    }
                    
                    ?>
                    
                    
                    
                    
                    
<html>
<head>
<title>Online Exam</title>
<link href="public.css" media="all" rel="stylesheet" type="text/css" />
<script type="text/javascript">
// set minutes
var mins = 5;
// calculate the seconds
var secs = mins * 60;
function countdown()
{
setTimeout('Decrement()',1000);
}
function Decrement() 
{
if (document.getElementById) 
{
minutes = document.getElementById("minutes");
seconds = document.getElementById("seconds");
// if less than a minute remaining
if (seconds < 299)
{
seconds.value = secs;
} 
else
{
minutes.value = getminutes();
seconds.value = getseconds();
}
secs--;
setTimeout('Decrement()',1000);
}
}
function getminutes() 
{
// minutes is seconds divided by 60, rounded down
mins = Math.floor(secs / 60);
return mins;
}
function getseconds() 
{
// take mins remaining (as seconds) away from total seconds remaining
return secs-Math.round(mins *60);
}

</script>
<SCRIPT LANGUAGE="JavaScript">

setTimeout('document.test.submit()',300*1000);
</SCRIPT>

</head>
<body text="orange" bgcolor="#151B54" onLoad="countdown();">
<center><table width="75%"><tr><td><marquee>
<img src="pic.jpg" align="middle" width="500" height="100" /></marquee>
</td></tr></table></center>


<form name="test" id="form1" action="examOver.php" method="post">

<input type="hidden" name="id" value="<?php echo $_POST["id"]; ?>" >
<input type="hidden" name="password" value="<?php echo $_POST["password"];?>" >
<input type="hidden" name="subject" value="<?php echo $pmd; ?>">
<input type="hidden" name="yr" value="<?php echo $_POST["year"];?>">


<div id="timer">
<h2>Remaining  time     <input id="minutes" type="text" style="width: 30px; border: 5; background-color:white; font-size: 20px; font-weight: bold;"> :  <input id="seconds" type="text" style="width: 30px; border: 5; background-color:white; font-size: 20px; font-weight: bold;"> 
</h2></div>
<hr size="10" style="background-color:#c00">
<div id="questions">

<?php
while($row123=mysql_fetch_array($result123))
{
	echo "<b>Q.No :  </b>" . $row123["qno"] ."<br>";
        echo "<b>Q : </b>" . $row123["q"] ."<br>";
        
?>
<input type="radio" name="<?php echo $row123["qno"]; ?>" value="a"/><?php echo $row123["a"]; ?><br>
                 <input type="radio" name="<?php echo $row123["qno"]; ?>"  value="b"/><?php echo $row123["b"]; ?><br>
                      <input type="radio" name="<?php echo $row123["qno"]; ?>"  value="c"/><?php echo $row123["c"]; ?><br>
                           <input type="radio" name="<?php echo $row123["qno"]; ?>"  value="d"/><?php echo $row123["d"]; ?><br>
<div id="hrr"><hr  align=left /></div>
        <?php
            }
        ?>

<center>
<input type="submit" name="go" value="submit"/>
<br>
<hr size="10" style="background-color:#c00">
</center>

                    
                    
                    
                    
                    
                    <?php
                    }
                    else{
        echo "You don't have 2nd chance";
    }
    }
                    else
    {
        redirect_to("login.php?logout=1");
    }
    
}


}
?>

</div>
</form>

</body>
</html>