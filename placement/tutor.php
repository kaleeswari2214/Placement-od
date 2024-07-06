<!DOCTYPE html> 
<html> 
  <head> 
    <title>Tutor</title> 
	  <style> 
	  body {
    color:black;
    background-color:silver;
    background-size: cover;
    background-position: cover;
    background-repeat: no-repeat;
  }
  
     </style>
</head>
<body> 
	<table>
			<tr>
			<th>Sno</th>
			<th>Student name</th>
			<th>Date of birth</th>
			<th>Roll no</th>
			<th>Register no</th>
			<th>Address</th>
			<th>Phone no</th>
			<th>Email id</th>
			<th>Comapany name</th>
			<th>Company address</th>
			<th>Date of placement</th>
			<th>Time of drive</th>
			<th>Parents Phone No</th>
			<th style="color:red;">Response</th>
			</tr>
			<?php
		$con=mysqli_connect("localhost:3306","root","","placement");
		$dis="SELECT * FROM `odform` WHERE `tutor`='none'";
		$r=mysqli_query($con,$dis);
		if($r)
		{
		while($row=$r->fetch_assoc())
		{
		echo "<tr><td>". $row['sno'] ."</td>
		<td>". $row['studentname'] ."</td>
		<td>". $row['dob'] ."</td>
		<td>". $row['rollno'] ."</td>
		<td>". $row['registerno'] ."</td>
		<td>". $row['address'] ."</td>
		<td>". $row['phoneno'] ."</td>
		<td>". $row['emailid'] ."</td>
		<td>". $row['cname'] ."</td>
		<td>". $row['caddress'] ."</td>
		<td>". $row['dop'] ."</td>
		<td>". $row['tod'] ."</td>
		<td>". $row['ppno'] ."</td>
		<td>
		<form action='' method='POST'>
		<input type='number' placeholder='enter sno' name='sno'> 
		<input value='Approve'  id='u' type='submit' name='approve'>
		<input value='Decline'  id='u' type='submit' name='decline'>
		</form></td></tr>";
		}
		}
		else
		{
		echo "values not displayed";
		}
		?>
		  </table>
<?php 
	if(isset($_POST['approve']))
    {
	$sno=$_POST['sno'];
	$con=mysqli_connect("localhost:3306","root","","placement");
	$dis="UPDATE `odform` SET `tutor`='approved' WHERE `sno`='$sno'";
	$r=mysqli_query($con,$dis);
	if($r)
	{
		echo "<script>alert('Onduty approved');</script>";
		
	}
	else{
		echo "<script>alert('Please enter valid sno')</script>";
	}
}
	else if(isset($_POST['decline']))
    {
	$sno=$_POST['sno'];
	$con=mysqli_connect("localhost:3306","root","","placement");
	$dis="UPDATE `odform` SET `tutor`='declined' WHERE `sno`='$sno'";
	$r=mysqli_query($con,$dis);
	if($r)
	{
		echo "<script>alert('Onduty  declined');</script>";
		
	}
	else{
		echo "<script>alert('Please enter valid sno')</script>";
	}
}
?>
</body> 
</html>
  
