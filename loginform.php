<?php
session_start();
   $_SESSION["connected"]="1";
   
    $e="admin@gmail.com";
    $p="1234";	
    $email=$_POST['email'];
    $pass=$_POST['password'];

	$con=mysqli_connect('localhost','root',"","onlineexam") or die("database error");
    $q="select name,email,pass,status,times from users where email='$email'";
    $status=mysqli_query($con,$q) or die("error");
    $row=mysqli_fetch_array($status);
   
       if(isset( $_POST['remember'])){
	    	setcookie('email',$email,time()+60*60*7);
	    	setcookie('pass',$pass,time()+60*60*7);
           }
        else
        {
        	setcookie('email',"",time()+60*60*7);
	    	setcookie('pass',"",time()+60*60*7);
        }   
	if(($email==$e)&&($pass==$p))
	{
	    
	    	
       header("Location:addquestion.php");
	}   

     else if($row['email']!=$email )
	 {		
         
			header("Location:login.php?err=1");
	
	 } 
     else if($row['pass']!=$pass)
	 {
	   
          		
        		
		header("Location:login.php?pass=1");
	 }
      else if($row['status']==1){
		  		$_SESSION["names1"]=$row['name'];
			$_SESSION["email"]= $row['email'];
			
		  header("Location:result.php");
	  }    
     else {
		
		$_SESSION["names1"]=$row['name'];
			$_SESSION["email"]= $row['email'];
		     $_SESSION["times"]=$row['times'];

		 header("Location:instruction.php");
         
		 
	 }
		 ?>
		

