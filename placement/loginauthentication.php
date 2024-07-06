<?php
if(isset($_POST['studentlogin']))
{
	$name=$_POST['user'];
	$pass=$_POST['pass'];
	$con=mysqli_connect("localhost:3306","root","","placement");
	$q="SELECT * FROM `tutor` WHERE `username`='$name' AND `password`='$pass'";
	$r=mysqli_query($con,$q);
	$check=mysqli_num_rows($r);
	if($check>0)
	{
		header('location:studentmain.php');
	}
	else
	{
		echo "<script>alert('password or rollno is incorrect');</script>";
		
	}
}
	else if(isset($_POST['tutorlogin']))
    {
	$name=$_POST['id'];
	$pass=$_POST['pass'];
	$con=mysqli_connect("localhost:3306","root","","college");
	$q="SELECT * FROM `faculitydetails` WHERE `faculity id`='$name' AND `login password`='$pass'";
	$r=mysqli_query($con,$q);
	$check=mysqli_num_rows($r);
	if($check>0)
	{
		header('location:tutormain.php');
	}
	else
	{
		echo "<script>alert('password or facultiyid is incorrect');</script>";
		
	}
}
else if(isset($_POST['hodlogin']))
    {
	$name=$_POST['id'];
	$pass=$_POST['pass'];
	$con=mysqli_connect("localhost:3306","root","","college");
	$q="SELECT * FROM `hodlogin` WHERE `hod id`='$name' AND `login password`='$pass'";
	$r=mysqli_query($con,$q);
	$check=mysqli_num_rows($r);
	if($check>0)
	{
		header('location:hodmain.php');
	}
	else
	{
		echo "<script>alert('password or hodid is incorrect');</script>";
		
	}
}
?>