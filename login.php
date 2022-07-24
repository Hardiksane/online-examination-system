<html>
    <head>
        <title>
            Login Page!!!
        </title>
		 <script type="text/javascript">
		 function validlogin()
		{
			if(frm.id.value == "") 
				{ 
				alert("Error: Examination ID cannot be blank!"); 
					frm.id.focus();
					return false; 
				} 
			
			if(frm.password.value == "") 
				{ 
				alert("Error: Password  cannot be blank!"); 
					frm.password.focus();
					return false; 
				} 
			
			if(frm.year.value == "-1") 
				{ 
				alert("Error: Please Select The Year!!!!"); 
					frm.year.focus();
					return false; 
				} 
				
		}
		 
		 </script>
    </head>
    <body bgcolor="#151B54">

	<h1 align = center style="color:yellow"><br>STUDENT  LOGIN</h1><br>
	<hr size=10 style="background-color:#c00"><br>
<table>
<tr>
<td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <img src="login.jpg" alt="Login_page" />
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
<td align="top">
		<center>
        <form name="frm" action="examStart.php" method="post" onsubmit="return validlogin(this);">
		<br>
            <table style="color:#ff9933" height="100">
                <tr>
                    <td><h4 style="color:orange">EXAMINATION ID &nbsp&nbsp&nbsp</td>
                    <td><input type="text" name="id"></td>
                </tr>
                <tr>
                    <td><h4 style="color:orange">PASSWORD &nbsp&nbsp&nbsp</td>
                    <td><input type="password" name="password"></td>
                </tr>
				<tr>
                <td><h4 style="color:orange">YEAR&nbsp&nbsp </td>
                <td>
                    <select name="year">
                        <option value="-1" selected>SELECT YEAR</option>
                        <option>firstyear</option>
                        <option>secondyear</option>
                        <option>thirdyear</option>
                    </select>
                </td>
            </tr>
                <tr>
                    <td align = "center"><input type="submit" value="start exam"></td>
                    <td align = "center"><input type="reset" value="clear"></td>
                </tr>
				<tr><td><br></td></tr>
				<tr><td><br></td></tr>
				<tr><td><br></td></tr>
				<tr><td background="yellow"><center><a href="index.php"><h2>Home Page</a></center></td>
				<td><center><a href="seReg.php"><h2>Registration Page</a></center></td></tr>
				</center>
            </table>
        </form>
		
		</td>
</tr>
</table>
		
		
<?php
if(isset($_GET['logout']) && $_GET['logout']==1)
{
	
 //$message = "<br><center>You are not <b>Authenticated</b>!!!!!</center>";
// echo $message;
 echo "<script> 
 alert('Sorry Password is Incorrect');</script>";
    }
?>

<hr size=10 style="background-color:#c00"><br>

		
    </body>
</html>
