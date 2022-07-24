<?php
	session_start();
	//echo $_SESSION['Sname'] ;
?>

<?php
	if(isset($_SESSION['Sname']))
{
    ?>

 
<html>
    <head>
	
        <title>SET</title>
		<script>
		function valid()
		{
		if(frm.pswd.value == "") 
				{ 
				alert("Error: Password cannot be blank!"); 
					frm.pswd.focus();
					return false; 
				} 
				if(frm.pswd.value != frm.conpswd.value) 
				{ 
					alert("Error: Please check that your Enterd password and confirmed password not Same!"); 
						frm.conpswd.focus();
						return false;
				} 
				
			}			
		</script>
    </head>
    <body bgcolor="#151B54" text="orange">
<br>
<h1 align = "center" style="color:yellow">Online Examination System</h1>
<hr size="10" style="background-color:#c00">
<center>

<?php include 'ppp.php'; ?>

	        <form name="frm" action="change1.php" method="post" onsubmit="return valid(this);">
            <table>
                <tr>
                    <td>New Password:</td>
                    <td><input type="password" name="pswd"></td>
                </tr>
                <tr>
                    <td>Confirm Password:</td>
                    <td><input type="password" name="conpswd"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Change Password"></td>
                    <td><input type="reset" value="clear"></td>
                </tr>
            </table>
        </form>

<?php
        }
        else
        {
            echo "<h2>Sorry Password is not updated!!!</h2>";
        }
?>

</center><br><br><br><br>
<hr size="10" style="background-color:#c00">

</body>
</html>