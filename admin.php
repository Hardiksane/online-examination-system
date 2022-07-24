<html>
<head>
	
	<title>Login Page</title>
	
	
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script type="text/javascript">
		 function validlogin()
		{
			if(ContactForm.username.value == "") 
				{ 
				alert("Error: Username cannot be blank!"); 
					ContactForm.username.focus();
					return false; 
				} 
			
			if(ContactForm.password.value == "") 
				{ 
				alert("Error: Password  cannot be blank!"); 
					ContactForm.password.focus();
					return false; 
				} 
				
		}
		 
		 </script>
	
</head>

<body>
<br>
	<form id="login-form" action="main.php" method="post" name='ContactForm' enctype='application/x-www-form-urlencoded' onsubmit='return validlogin()'>
	
		<fieldset>
		
			<legend>Log in</legend>
			
			<label for="login">USERNAME : </label>
			<input type="text" id="name" name="username"/>
			<div class="clear"></div>
			
		    
			

			<label for="password">PASSWORD :  </label>
			<input type="password" id="pwd" name="password"/>
			
			<div class="clear"></div>
			
			<br />
			
			<input type="submit" style="margin: -20px 0 0 287px;" class="button" name="commit" value="Log in" onclick="function ValidateContactForm()"/>	
		</fieldset>
	</form><br><br><br><br><br><br>
	<center><a href="index.php"><h4>Click Hear To Go Home Page</a></center>
</body>

</html>
<?php
if(isset($_GET['logout']) && $_GET['logout']==1)
{
 $message = "<br><br><br><br><center>You are now logged out!!!!!</center>";
 echo $message;
    }
?>

<?php
if(isset($_GET['logout']) && $_GET['logout']==2)
{
 $message = "<br><br><br><br><center>You are not <b>Authenticated</b>!!!!!</center>";
 echo $message;
    }
?>


