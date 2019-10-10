<?php
  $con=mysqli_connect('localhost','root',"","onlineexam") or die("database error");

 
	 session_start();
 
    
   
 if(isset($_POST['name'])!=NULL)
  {	
	$names=$_POST['name'];
    	
	$_SESSION["names"]=$names;
	 
	 $father=$_POST['father'];
	 $_SESSION["father"]=$father;
	 
	 $address=$_POST['address'];
	 
	 $_SESSION["address"]=$_POST['address'];
	$email=$_POST['email'];
	$_SESSION["email"]=$_POST['email'];
	
	$pass=$_POST['confirm'];
	$_SESSION["pass"]=$_POST['confirm'];
	
	$collage_name=$_POST['collage_name'];
	  $_SESSION["collage_name"]=$_POST['collage_name'];

	  $course_name=$_POST['course_name'];
	$_SESSION["course_name"]=$_POST['course_name'];

	$dob=$_POST['dob'];
		$_SESSION["dob"]=$_POST['dob'];

		$gender=$_POST['gender'];
        $_SESSION["gender"]=$_POST['gender'];

		$mobile=$_POST['mobile'];
	$_SESSION["mobile"]=$_POST['mobile'];
  //$mobile=121345;


	//echo "<script>alert('registration succsesfull');</script>"   
   
  }
 
mysqli_close($con);


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration</title>
  <style>
    span {color:red;}
    ::-webkit-input-placeholder {
   text-align: center;
 }
   #button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
}
  h1 {text-align: center;}
  div.buttons {text-align: center;}

  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
 </head>
<body style="background: LightGray;">

<div class="container">
   <h1>Confirmation</h1>
   <div class = "">
   <form action= "registerationform.php" method="POST" name ="form">
    <div class="form-group">
      <label for="usr">Name:</label>
      <input type="text" class="form-control" id="usr" placeholder="Enter Name" name="name" autocomplete="off" value=<?php echo $names?> disabled="disabled" >
      <span id="nam" class = "danger"> </span>
    </div>
	
	<div class="form-group">
      <label for="usr">Father Name:</label>
      <input type="text" class="form-control" id="usr" placeholder="Enter Father Name" name="father" autocomplete="off" value=<?php echo $father?> disabled="disabled" >
      <span id="fat" class = "danger"> </span>
    </div>
	
	<div class="form-group">
      <label for="usr">Address:</label>
      <input type="text" class="form-control" id="usr" placeholder="Enter Address"  name="address" autocomplete="off" value=<?php echo $address?> disabled="disabled">
      <span id="add" class = "danger"> </span>
    </div>
	
	<div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email"  name="email" autocomplete="off"value=<?php echo $email?> disabled="disabled">
      <span id="ema" class = "danger"> </span>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="text" class="form-control" id="password" placeholder="Enter password"  name="pass" value=<?php echo $pass?> disabled="disabled">
      <span id="pass" class = "danger"> </span>
    </div>
	  <div class="form-group">
      <label for="pwd">Confirm Password:</label>
      <input type="text" class="form-control" id="confirm_password" placeholder="Enter password"  name="confirm" value=<?php echo $pass?> disabled="disabled">
      <span id="cnf" class = "danger"> </span>
    </div>
   
     <div class="form-group">
	 <label for="usr">College Name:</label>
      <input type="text" class="form-control" id="usr" placeholder="Enter Collage Name" name="collage_name" autocomplete="off" value=<?php echo $collage_name?> disabled="disabled">
      <span id="col" class = "danger"> </span>
    </div>
     <div>
	 <label for="usr">Course Name:</label>
      <input type="text" class="form-control" id="usr" placeholder="Enter Course Name" name="course_name" autocomplete="off" value=<?php echo $course_name?> disabled="disabled">
      <span id="cou" class = "danger"> </span>
    </div>
      <div>
	 <label for="usr">DOB:</label>
      <input type="date" class="form-control" id="usr" placeholder="Enter DOB" name="dob" value=<?php echo $dob?> disabled="disabled">
      <span id="dat" class = "danger"> </span>
    </div>
	<div>
	 <label for="usr">Gender:</label><br>
	 <label class="radio-inline"> <input type="text" value="male" name="gender" disabled="disabled" value=<?php echo $gender ?>></label>

    <span id="gen" class = "danger"> </span>

	</div>
     <div>
	 <label for="usr">Mobile No:</label>
       <input type="number" id="UserMobile" maxlength="10"   autocomplete="off" placeholder="Mobile No. " class="form-control" pattern="^\d{10}$"  error-message name="mobile" value=<?php echo $mobile?> disabled="disabled">
       <span id="mob" class = "danger"> </span>
    </div>

	<div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <div class = "buttons">
    <button type="submit" id = "button" class="btn btn-default">Submit</button>
	<a href="registeration.php" class="btn btn-info" role="button">Back </a></div>
  </form>
</div>
  <br />
  	<a href="login.php" class="btn btn-info" role="button">Back To Loogin Page</a>
    <hr/>
</div>
</body>
</html>
