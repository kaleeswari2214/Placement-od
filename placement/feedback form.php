<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Placement Feedback Form</title>
    <style>
        body {
            background-color:pink;
        }
        form {
            max-width: 600px;
            margin: auto;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>

  <center><h2>Placement Feedback Form</h2></center>
    <form action="" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="program">Department:</label>
        <input type="text" id="program" name="program" required> 
          <label for="program">Roll Number</label>
        <input type="text" id="program" name="number" required>
            <label for="tasks_aligned">Drive</label>
        <select id="tasks_aligned" name="tasks_aligned" required>
            <option value="yes">Internal</option>
            <option value="no">External</option>
        </select>

        <label for="company">Placement Company:</label>
        <input type="text" id="company" name="company" required>
        <label for="duration">Duration of Placement:</label>
        <input type="text" id="duration" name="duration" required>
		<label for="program">About aptitude Questions </label>
        <input type="text" id="program" name="program" required>
          <label for="program">About technical tasks</label>
        <input type="text" id="program" name="tt" required>
        <label for="overall_experience">Overall Experience (Scale of 1-5):</label>
        <input type="number" id="overall_experience" name="oe" min="1" max="5" required>
        <label for="tasks_aligned">Were tasks aligned with your skills and studies?</label>
        <select id="tasks_aligned" name="ta" required>
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select>

        <label for="valuable_tasks">Specific tasks  you found most valuable:</label>
        <input type="text" id="valuable_tasks" name="vt">
        <label for="comments"> additional suggestions:</label>
        <textarea id="comments" name="comments" rows="6"></textarea>
          <center> <br> <button type="submit" name="submit">Submit Feedback</button></br></center>

    </form>
<?php 
	 if(isset($_POST['submit']))
    {
	$name=$_POST['name'];
	$department=$_POST['program'];
	$rollno=$_POST['number'];
	$drive=$_POST['tasks_aligned'];
	$pc=$_POST['company'];
	$dp=$_POST['duration'];
	$aq=$_POST['program'];
	$at=$_POST['tt'];
	$oe=$_POST['oe'];
	$qn=$_POST['ta'];
	$sfv=$_POST['vt'];
	$as=$_POST['comments'];
	$con=mysqli_connect("localhost:3306","root","","placement");
	$dis="INSERT INTO `feedbackdetails`( `name`, `department`, `roll no`, `drive`, 
	`placement company`, `duration of company`, `aptitude quest`, `technical task`, 
	`overall experience`, `qn`, `sw`, `additional sugestions`) VALUES ('$name',
	'$department','$rollno','$drive','$pc','$dp','$aq','$at',
	'$oe','$qn','$sfv','$as')";
	$r=mysqli_query($con,$dis);
	if($r)
	{
		echo "<script>alert('Feedback submitted successfully')</script>";
	}
	else{
		echo "<script>alert('Please fill all details ')</script>";
	}
}
?>
</body>
</html>
