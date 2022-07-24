<html>
    <head>
        <title>create question paper</title>
		<script type="text/javascript">
	
        function valid()
		{
			if(frm.sub.value == "") 
				{ 
				alert("Error: Subject Name cannot be blank!"); 
					frm.sub.focus();
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
    <body bgcolor="#151B54" text="yellow">
	<center><h1 align = "center" style="color:yellow"><br>Online Examination System </h1>
	<br><hr size=10 style="background-color:#c00">
<?php
	session_start();
	//echo $_SESSION['Sname'] ;
?>

<?php
	if(isset($_SESSION['Sname']))
{
    ?>
    <?php include 'ppp.php'; ?>

    <form name="frm" action="beta.php" method="post" onsubmit="return valid(this);">
        <table>
            <tr>
                <td>Subject:</td>
                <td><input type="text" name="sub"></td>
            </tr>
            <tr>
                <td>Year:</td>
                <td>
                    <select name="year">
                        <option value="-1">select year</option>
						<option>FirstYear</option>
                        <option>SecondYear</option>
                        <option>ThirdYear</option>
                        
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="Go"></td>
                <td><input type="reset" value="reset"></td>
            </tr>
        </table>
<b>Note :</b>Subject Name must be a pure String Value with no space.
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