


<!DOCTYPE html>
<html lang="en">
<head>
  <title>LOGIN</title>
   
     
   
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
  
  </head>
<body style="background:#eee;"> 


 <center> <h1 style="color:red ;font-size:80px;">Online Exam Portal</h1><center>
  <br>
  <br>
  <br>
<div class="container">
          <div class="row">
             <div class="col-sm-6">		  
			     <div class="panel panel-danger">
				    <div class="panel-heading"><h2 >Already a member? Login</h2></div>
                       <div class="panel-body">			    
			         	 <form role="form" action="loginform.php" method="POST">
							<div class="form-group">
							  <label for="email">Email:</label>
							  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required />
   							</div>
								<div class="form-group">
								  <label for="pwd">Password:</label>
								  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required />
								</div>
								<div class="checkbox">
								  <label><input type="checkbox" name="remember"> Remember me</label>
								</div>
				                <button type="submit" class="btn btn-default" style="background:green;color:white ">Submit</button>
								<button type="reset"  class="btn btn-default" style="background:green;color:white ">RESET</button>
			               </form>
                       </div>
                    </div>
                  </div> 					
		     <div class="col-sm-6">		  
			     <div class="panel panel-danger">
				    <div class="panel-heading"><h2>New User? Register Now</h2></div>
                       <div class="panel-body">			    
			         	      <p>TO Start the test,click here registerd first</p>
				         
                            <a href="registeration.php" class="btn btn-info" role="button" style="color:red;">Register</a>
                       </div>
                    </div>
                  </div> 			
		</div>
	</div>


<?php
    if(isset($_COOKIE['email']) and isset($_COOKIE['pass'])){
    	$email=$_COOKIE['email'];
    	$pass=$_COOKIE['pass'];
        echo "<script>
        document.getElementById('email').value='$email';
        document.getElementById('pwd').value='$pass';
       </script> ";
    }
?>
	
	<?php 
	
	if(isset($_REQUEST['succ']))
	{
		?>
		<span style="color:red; font-size:40px;" >Registration Successfully .... </span></br>
		 <span style="color:red; font-size:40px;">Please Login ..  </span>
	<?php }
	
	?>
	
		<?php 
	
	if(isset($_REQUEST['err']))
	{
		?>
		<span style="color:red;font-size:40px;">Not Registerted this email  .... </span></br>
		
	<?php }
	
	?>
			<?php 
	
	if(isset($_REQUEST['pass']))
	{
		?>
		<span style="color:red;font-size:40px;">Please Cheack password  .... </span></br>
		
	<?php }
	
	?>
	<?php
      if(isset($_REQUEST['logout']))
	{
		?>
		<span style="color:red ;font-size:40px;">thanku .....</span></br>
		<span style="color:red ;font-size:40px;">logout succsesfully .... </span></br>
		
	<?php }
	
	?>    
		<?php
      if(isset($_REQUEST['register']))
	{
		?>
		<span style="color:red;font-size:40px;">You have already registerd .... </span></br>
		
	<?php }
	
	?> 

	 <?php
      if(isset($_REQUEST['login']))
	{
		?>
		<span style="color:red;font-size:40px;">Please Login .... </span></br>
	
    	
	<?php }
	
	?>
	 <?php
      if(isset($_REQUEST['erremail']))
	{
		?>
		<span style="color:red;font-size:40px;">Your email id is not vaild .... </span></br>
		<span style="color:red;font-size:40px;">please registerd with valid email id .... </span></br>
	
    	
	<?php }

	?>	

 </body>
</html>
