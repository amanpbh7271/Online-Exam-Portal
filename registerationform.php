<?php
  $con=mysqli_connect('localhost','root',"","onlineexam") or die("database error");

 
	 session_start();
 
    
   
  $names=$_SESSION["names"];	
   echo $names;
	$father=$_SESSION["father"];
	
	 $address=$_SESSION["address"];
	$email=$_SESSION["email"];
	$pass=$_SESSION["pass"];
    $collage_name=$_SESSION["collage_name"];
	$course_name=$_SESSION["course_name"];
	$dob=$_SESSION["dob"];
	$gender=$_SESSION["gender"];
    $mobile=$_SESSION["mobile"];
  //$mobile=121345;

 
   $q1="select email from users where email='$email'";
   $status1=mysqli_query($con,$q1) or die("error");
    $row=mysqli_fetch_array($status1);   
   if($email==$row['email'])
       header("Location:login.php?register=1");	   
    else{
 $q="insert into users(name,father,address,email,pass,collage,course,dob,gender,mob,status,times) values('$names','$father','$address','$email','$pass','$collage_name','$course_name','$dob','$gender','$mobile','0',240)"; 
 $status=mysqli_query($con,$q) or die("error");
   header("Location:login.php?succ=1");
  }
	//echo "<script>alert('registration succsesfull');</script>"   
   
  
 
mysqli_close($con);


?>