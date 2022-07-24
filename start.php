<html>
    <head>
        <title>Question Paper</title>
		<script type="text/javascript">
	
        function valid()
		{
			if(frm.q_no.value == "") 
				{ 
				alert("Error: Qution Number cannot be blank!"); 
					frm.q_no.focus();
					return false; 
				}
			if(frm.q.value == "") 
				{ 
				alert("Error: Qution cannot be blank!"); 
					frm.q.focus();
					return false; 
				}
				if(frm.a.value == "") 
				{ 
				alert("Error: First Option A cannot be blank!"); 
					frm.a.focus();
					return false; 
				}
				if(frm.b.value == "") 
				{ 
				alert("Error: Second Option B cannot be blank!"); 
					frm.b.focus();
					return false; 
				}
				if(frm.c.value == "") 
				{ 
				alert("Error: Third Option C cannot be blank!"); 
					frm.c.focus();
					return false; 
				}
				if(frm.d.value == "") 
				{ 
				alert("Error: Four Option D cannot be blank!"); 
					frm.d.focus();
					return false; 
				}
							
			if(frm.ans.value == "-1") 
				{ 
				alert("Error: Please Select Correct Anwser !!!!"); 
					frm.ans.focus();
					return false; 
				} 
				
		}
        
    </script>
		
		
    </head>
   <body bgcolor="#151B54" text="yellow">
   <center><h1 align = "center" style="color:yellow">Online Examination System </h1>
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

<?php
if(isset($_GET['logout']) && $_GET['logout']==3)
{
 $message = "<br><br><br><br><center>You are not <b>Authenticated</b>!!!!!</center>";
 echo $message;
    }
?>



<?php
$s = $_POST["sub"];
$y = $_POST["year"];
?>
        <form name="frm" action="next.php" method="post" onsubmit="return valid(this);">
        <input type="hidden" name="sub"  value="<?php echo $s; ?>">
        <input type="hidden" name="year"  value="<?php echo $y; ?>">

            <table align="center" border="10">
                <tr>
                    <td>Q NO : </td>
                    <td><input type="text" maxlength="50" size="30" name="q_no"></td>
                </tr>
                <tr>
                    <td>Q : </td>
                    <td><textarea cols="50" rows="10" name="q" ></textarea></td>
                </tr>
                <tr>
                    <td>A : </td>
                    <td><input type="text" maxlength="50" size="30" name="a"></td>
                </tr>
                <tr>
                    <td>B : </td>
                    <td><input type="text" maxlength="50" size="30" name="b"></td>
                </tr>
                <tr>
                    <td>C : </td>
                    <td><input type="text" maxlength="50" size="30" name="c"></td>
                </tr>
                <tr>
                    <td>D : </td>
                    <td><input type="text" maxlength="50" size="30" name="d"></td>
                </tr>
                <tr>
                    <td>ANS : </td>
                    <td><select name="ans">
					<option value="-1">Select Answer</option>
                    <option>a</option>
                    <option>b</option>
                    <option>c</option>
                    <option>d</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" value="next"></td>
                    <td><input type="reset" value="Reset"></td>
                </tr>
            </table>
        </form>
    

<?php
        }
        else
        {
            echo "<h2>Sorry Dude!!!!!!!!!</h2>";
        }
?>

<br><hr size=10 style="background-color:#c00">
</center>
</body>
</html>