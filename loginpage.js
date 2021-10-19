<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= device-width, initial-scale=1.0">
    <title> Validation </title>
</head> 
str=
<body>
     <script type="text/javascript">
        function validate(valfrm){
   		var str="";
   		if(valfrm.name.value=="")  str+="Enter Name\n";
   		if(valfrm.password.value=="")  str+="Enter Password\n";
   		if(valfrm.contact.value=="")  str+="Enter Contact Details\n";
   	else{
       		if(valfrm.contact.value.length!=10) str+="Enter 10 digit number\n";
   		}
	if(valfrm.email.value=="")  str+="Enter Email\n";
   	else {  
       		if(valfrm.email.value.indexOf(' ') >=0) str+="Email Address Can not have Space...\n";
       		if(valfrm.email.value.indexOf('@')==-1) str+="Email Address Contains @...";
   		}
                
        else
            alert(str);
        }
    </script>

<form action="login.php" method="POST">
    <div class="entry">
        <input type="text" name="Email" placeholder="Email" required><br><br>
        <input type="password" name="Password" placeholder="Password" required><br><br>
   
    <div class="login">  
            <button onclick="validate(this.form);">Submit</button><br><br>
	    <input type="submit" value="Login" onclick="return confirm('Are you Sure You want to Submit??')" >
     </div>
     
</form>
</body>
</html>



