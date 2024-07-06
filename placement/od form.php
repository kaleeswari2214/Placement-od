<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Placement Form</title>
      <style>
        body {
    background-color: lightblue;
}
input, select {
            width: 15%;
            padding: 3px;
            margin-bottom: 5px;
            box-sizing: border-box;
}
</style>
</head>
<body>

  <center> <h1>OD Form</h1>

    <form action="" method="POST">
      <br> <label for="name">Student Name:</label>
        <input type="text" id="student name" name="sn" required> </br>

        <br><label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required></br>

      <br><label for="rollNumber">Roll Number:</label>
        <input type="text" id="rollNumber" name="rn" required></br>
          
       <br><label for="rollNumber">Register Number:</label>
         <input type="text" id="registerNumber" name="rno" required></br>

       <br> <label for="address">Address:</label>
         <input type="text" id="address" name="add" required></br>

       <br> <label for="phoneNumber">Phone Number:</label>
         <input type="tel" id="phoneNumber" name="pn" required></br>
          
         <br> <label for="email">Email ID:</label>
           <input type="text" id="emailid" name="ei"></br>
           
        <br><label for="address">Company Name:</label>
          <input type="text" id="companyName" name="cn" required></br>
          
        <br><label for="address"> Company Address:</label>
          <input type="text" id=" companyAddress" name="ca" required></br>
          
          <br><label for="dob">Date of Placement:</label>
            <input type="date" id="dateofplacement" name="dop" required></br>
          <br><label for="timeInput">Time of Drive:</label>
            <input type="time" id="timeInput" name="tod" required></br>
        <br><label for="motherPhoneNumber">parent's Phone Number:</label>
          <input type="tel" id="parentsPhoneNumber" name="ppn" required></br>

          <br><button type="submit" name="submit">Submit</button></br>
		  <br><button><a href="student login.php">Go back</a></button></br>
    </form> </center>
<?php 
	 if(isset($_POST['submit']))
    {
	$sname=$_POST['sn'];
	$dob=$_POST['dob'];
	$rollno=$_POST['rn'];
	$registername=$_POST['rno'];
	$adress=$_POST['add'];
	$pnum=$_POST['pn'];
	$ei=$_POST['ei'];
	$cn=$_POST['cn'];
	$ca=$_POST['ca'];
	$dop=$_POST['dop'];
	$tod=$_POST['tod'];
	$ppn=$_POST['ppn'];
	$con=mysqli_connect("localhost:3306","root","","placement");
	$dis="INSERT INTO `odform`(`studentname`, `dob`, `rollno`, 
	`registerno`, `address`, `phoneno`, `emailid`, `cname`, 
	`caddress`, `dop`, `tod`,  `ppno`,`tutor`,`hod`) VALUES
	('$sname','$dob','$rollno','$registername','$adress'
	,'$pnum','$ei','$cn','$ca','$dop'
	,'$tod','$ppn','none','none')";
	$r=mysqli_query($con,$dis);
	if($r)
	{
		echo "<script>alert('Odform submitted successfully')</script>";
	}
	else{
		echo "<script>alert('Please fill all details ')</script>";
	}
}
?>
</body>
</html>
