<!DOCTYPE html> 
<html> 
  <head> 
    <title>login</title> 
</head> 	
  <style>
    body {
    font-size:25px;
    color:magenta;
    background-image: url(hod.jpeg);
    background-size: cover;
    background-position: cover;
    background-repeat: no-repeat;
  }
 
button { 
       font-size:15px;     
       background-color:brown;
       width: 10%;   
        padding: 6px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
 input[type=text], input[type=password] {   
        width: 20%;   
        margin: 4px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid green;   
        box-sizing: border-box; 
          
    } 
#alig{
	margin-left:530px;
}
a{
	text-decoration:none;
}		
     </style>
<body> 
    <div class="main"> 
      <center><h1>Hod Login</h1></center>
	  <form method="POST" action="">
      <center>
            <br><label for="first"> 
                  Username: 
              </label> 
            <input type="text" id="first" name="username"   placeholder="Enter your Username" required></br> 
   <br>  <label for="password"> 
                  Password: 
              </label> 
            <input type="password" id="password" name="password" placeholder="Enter your Password" required></br>
              <div class="wrap"> 
               <br> <button type="submit" name="login"> 
                    Login
                 </button> 
                 <br> <button type="submit" name="login"> 
                    Go Back
                 </button> </br></center>
     </div> 
	 	
	</form>
<?php
if(isset($_POST['login']))
{
	$user=$_POST['username'];
	$pass=$_POST['password'];
	$con=mysqli_connect("localhost:3306","root","","placement");
	$q="SELECT * FROM `hodlogin` WHERE `username`='$user' AND `password`='$pass'";
	$r=mysqli_query($con,$q);
	$check=mysqli_num_rows($r);
	if($check>0)
	{
		header('location:hod.php');
	}
	else
	{
		echo "<script>alert('password or username is incorrect');</script>";
		
	}
}
?> 
</body> 
  
</html>
