<!DOCTYPE html> 
<html> 
  <head> 
    <title>login</title> 
</head> 
  <style>
 body {
    color:black;
    font-size:25px;
    background-image: url(student.jpeg);
    background-size: cover;
    background-position: cover;
    background-repeat: no-repeat;
  }
 
button {   
       background-color:purple;
       font-size:20px;
       width: 15%;   
        padding: 8px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
 input[type=text], input[type=password] {   
        width: 25%;   
        margin: 8px 0;  
        padding: 12px;   
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
      <center><h1>Student Login</h1>
	  <form method="POST" action="">
            <br><label for="first"> 
                  Roll no: 
              </label> 
            <input type="text" id="first" name="roll" placeholder="Enter your rollno" required></br>  <br> 
			<label for="password"> 
                  Password: 
              </label> 
            <input type="password" id="password"    name="password"  placeholder="Enter your Password" required></br>
              <div class="wrap"> 
               <br> <button type="submit" name="login"> 
                    Login
                 </button> </br>
                 <br> <button type="submit" name="login"> 
                  Go Back
                 </button> </br</center>
     </div> 
	</form>
	<?php
if(isset($_POST['login']))
{
	$rollno=$_POST['roll'];
	$pass=$_POST['password'];
	$con=mysqli_connect("localhost:3306","root","","placement");
	$q="SELECT * FROM `studentlogin` WHERE `rollno`='$rollno' AND `password`='$pass'";
	$r=mysqli_query($con,$q);
	$check=mysqli_num_rows($r);
	if($check>0)
	{
		header('location:student form.php');
	}
	else
	{
		echo "<script>alert('password or rollno is incorrect');</script>";
		
	}
}
?>
</body> 
</html>
  
