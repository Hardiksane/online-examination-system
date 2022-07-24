<html>
<head>
    <title>student registration</title>
    
    <script type="text/javascript">
	
        function pmd()
        {
            var st1=new String();
            st1=document.frm.password.value;
            var len=st1.length;
            if(len<=3)
            {
                document.getElementById('test').innerHTML="too short";
            }
            else
            if(len>3 && len<=5)
            {
               document.getElementById('test').innerHTML="ok"; 
            }
            else
            if(len>5)
            {
                document.getElementById('test').innerHTML="strong";
            }          
        }
        function cnfm()
        {
            var st2=new String();
            st2=document.frm.password.value;
            var len2=st2.length;
            var st3=new String();
            st3=document.frm.confirm.value;
            var len3=st3.length;
            
            if(len2==len3 && st2==st3)
            {
             document.getElementById('test').innerHTML="Right!!!!!!!";   
                
            }
        }
		
        function valid()
		{
			if(frm.name.value == "") 
				{ 
				alert("Error: Student name cannot be blank!"); 
					frm.name.focus();
					return false; 
				} 
			if(!frm.mob_no.value == "") 
				{ 
				var mob = /^\d{10}$/;
				if(!frm.mob_no.value.match(mob))
				{
					alert("mobile no should be ten digit");
					frm.mob_no.focus();
					return false;
				}
				p = /^[0]?[789]\d{9}$/;
				if(!frm.mob_no.value.match(p))
				{alert("Mobile Number Must Start with 7, 8 or 9");
				frm.mob_no.focus();
					return false;
				}
				}
			else{alert("Error: mobile Number cannot be blank!"); 
					frm.mob_no.focus();
					return false;
					}				
				
			if(!frm.email.value == "") 
				{ 
			re = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
				if(!frm.email.value.match(re))
				{alert(" Email Is Not valid...please provide valid email pattern");
					frm.email.focus();
					return false;
				}}
				else{
				alert("Error: Email Address cannot be blank!"); 
					frm.email.focus();
					return false; 
				} 
			if(frm.password.value == "") 
				{ 
				alert("Error: Password cannot be blank!"); 
					frm.password.focus();
					return false; 
				} 
				if(frm.password.value != "" && frm.password.value == frm.confirm.value) 
				{ 
					if(frm.password.value == frm.name.value)
						{ 
						alert("Error: Password must be different from Student name!");
						frm.password.focus(); return false;
						 }
				} 
						else { 
						alert("Error: Please check that your Enterd password and confirmed password not Same!"); 
						frm.confirm.focus(); 
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
    <style type="text/css">
        
        td
{
font-size:15pt;
font-family:times new roman;
}
    </style>

    
</head>
<body bgcolor="#151B54">
<br>
<h1 align = "center" style="color:yellow">Online Examination System</h1>
<hr size="10" style="background-color:#c00">
<center>
<table>
<tr>
<td><img src="reg.jpg" alt="registration" /></td>
<td>

    <center><h2 style="color:orange"><u>Student Registration  Form</u></h2></center>
    <form name="frm" action="seReg1.php" method="get" onsubmit="return valid(this);">
     
        <table style="color:#ff9933" height="350">
            <tr>
                <td>Student Name :</td>
                <td><input type="text" name="name"></td>
				
            </tr>
            
            
                <td>Mobile No. :</td>
                <td><input type="text" name="mob_no"></td>
            </tr>
            <tr>
                <td>Email_id :</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
            <tr>
                <td>Password :</td>
                <td><input type="password" name="password" onkeyup="pmd()">
                <div id="test"></div>
                
                </td>
				
            </tr>
			 <tr>
                <td>Confirm Password :</td>
                <td><input type="password" name="confirm" onkeyup="cnfm()"></td>
            </tr>
            <tr>
			<tr>
                <td>Year:</td>
                <td>
                    <select name="year">
                        <option value="-1">select year</option>
                        <option>firstyear</option>
                        <option>secondyear</option>
                        <option>thirdyear</option>
                    </select>
                </td>
            </tr>
           
                <td><input type="submit" value="submit"></td>
                <td><input type="reset" value="reset"></td>
            </tr>
        </table>
     
    </form>
	
	</td>
</tr>
<tr><td><center><a href="index.php"><h4>Click Hear To Go Home Page</a></center></td>
<td><center><a href="login.php"><h4>Click Hear To Go Login Page</a></center></td></tr>
</table>
  </center>
<hr size="10" style="background-color:#c00">

</body>
</html>
