<html>
<head>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 130vh;
}
.container {
    background-color: #fff;
    padding: 70px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
form {
    display: flex;
    flex-direction: column;
}
label {
    margin-bottom: 8px;
}

input {
    padding: 8px;
    margin-bottom: 16px;
}
input[type="submit"] {
    background-color: #4caf50;
    color: #fff;
    cursor: pointer;
}
</style>

</head>
<body>
<div class="container">
        <form action="sign_up.php" method="post">
            <h2>Notice Board Form</h2>
            
	<lable for="firstname">First Name:</lable>
	<input type="text" name="firstname" required>

            <label for="middlename">Middle Name:</label>
            <input type="text" name="middlename" required>

            <label for="lastname">Last Name:</label>
            <input type="text" name="lastname" required>

            <label for="dob">Date of Birth:</label>
            <input type="date" name="dob">

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="city">City:</label>
            <input type="text" name="city" required>
           
            <input type="submit" value="Submit">
        </form>
    </div>
    
<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		$first_name=$_POST['firstname'];
		$middle_Name=$_POST['middlename'];
		$last_name=$_POST['lastname'];
		$date_of_birth=$_POST['dob'];
		$cus_email=$_POST['email'];
		$city=$_POST['city'];

		//connection
		$servername="localhost";
		$username="root";
		$password="";
		$database="ankita";

		//create a connection
		$conn=mysqli_connect($servername,$username,$password,$database);
		$sql="INSERT INTO `register`(`First_Name`, `Middle_Name`, `Last_Name`, `DOB`, `Email`, `City`) VALUES ('$first_name','$middle_Name','$last_name','$date_of_birth', '$cus_email', '$city')";
		$result=mysqli_query($conn,$sql);
		if($result)
		{
			echo '<script>alert("Data inserted Successfully..!!");</script>';
		}
		else
		{
			echo '<script>alert("Error");</script>';
		}
	}
?>
</body>
</html>

