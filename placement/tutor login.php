<!DOCTYPE html> 
<html> 
  <head> 
    <title>login</title> 
</head> 
  <style> 
  body {
    color:violet;
    font-size:25px;
    background-image: url(tutor.jpeg);
    background-size: cover;
    background-position: cover;
    background-repeat: no-repeat;
  }
 
button {   
       background-color:pink;
       font-size:20px;
       width: 15%;   
        padding: 10px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
 input[type=text], input[type=password] {   
        width: 20%;   
        margin: 4px;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px ;   
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
      <center><h1>Tutor Login</h1>
	  <form method="POST" action="">
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
                 </button> </br>
				 <br><button type="go back" name="login"> 
                    Go Back</button></center>
     </div>
	 	
	</form>
	<?php
if(isset($_POST['login']))
{
	$user=$_POST['username'];
	$pass=$_POST['password'];
	$con=mysqli_connect("localhost:3306","root","","placement");
	$q="SELECT * FROM `tutorlogin` WHERE `username`='$user' AND `password`='$pass'";
	$r=mysqli_query($con,$q);
	$check=mysqli_num_rows($r);
	if($check>0)
	{
		header('location:tutor.php');
	}
	else
	{
		echo "<script>alert('password or username is incorrect');</script>";
		
	}
}
?>
</body> 
</html>
  
