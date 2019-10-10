<?php
session_start();
            if(!isset($_SESSION["connected"]))
               header("Location:login.php?login=1");		

?>


<html>

<head>
<title>Addquestion</title> 
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
 <center>
 <div class="form-group">
 <label for="usr" style="font-size:40px ;color:red">Add Question:</label>
 </div>
 </center>
 <div class="row">
												 <div>
											 <div class="col-sm-1">
												 </div>
												   </div>  
					 
					 <div class="col-sm-6" >
					<div class="container" style="background:white;border:solid">
					 
					 
					 <form role="form" onSubmit="if(!confirm('Are You sure?')){return false;}" action="addquestionform.php" method="POST">
				
	<div class="form-group">
      <label for="usr" >Question:</label>
      <input type="text" class="form-control" id="usr" placeholder="Enter Question" name="question" autocomplete="off" required></input>
      <span id="fat" class = "danger"> </span>
    </div>
						 	<div class="form-group">
      <label for="usr">Option 1:</label>
      <input type="text" class="form-control" id="usr" placeholder="Enter option 1" name="option1" autocomplete="off" required></input>
      <span id="fat" class = "danger"> </span>
    </div>						 
					 
					 	<div class="form-group">
      <label for="usr">Option 2:</label>
      <input type="text" class="form-control" id="usr" placeholder="Enter option 2" name="option2" autocomplete="off" required></input>
      <span id="fat" class = "danger"> </span>
    </div>
	
		<div class="form-group">
      <label for="usr">Option 3:</label>
      <input type="text" class="form-control" id="usr" placeholder="Enter Option 3" name="option3" autocomplete="off" required></input>
      <span id="fat" class = "danger"> </span>
    </div>
					 
					 	<div class="form-group">
      <label for="usr">Option 4:</label>
      <input type="text" class="form-control" id="usr" placeholder="Enter Option 4" name="option4" autocomplete="off" required></input>
      <span id="fat" class = "danger"> </span>
    </div>
	<div class="form-group">
      <label for="usr">Right Option:</label>
      <input type="number" class="form-control" id="usr" placeholder="Right Option" name="right" autocomplete="off">
      <span id="fat" class = "danger"> </span>
    </div>
					 <div class="row">
                  <div class="col-sm-10">			 	
						<div class="button">
					         <label><button type="submit" class="btn btn-default" style="background:green;color:white "  value="Submit" >Submit</button></label>                 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					   <label><button type="reset" class="btn btn-default" style="background:green;color:white " value="Reset">Reset</button></label>
					   </div>
				  </div>	   
					   
               <div class="col-sm-2">  
					<div >
					
					</div>
               </div>
	          </div>	 
					 </form>
					</div>
                     
					 
	</div>
				 
				 
	<div>
				 <div class="col-sm-3">
				 </div>
				</div>
</div>
<br>
<center>
<div>
<label><button class="btn btn-default" style="background:green;color:white " onclick="window.location.href='login.php'"  value="Back To Login From" >Back To Login From</button></label>
</div>
</center>
<center>
<?php
      if(isset($_REQUEST['stored']))
	{
		?>
		<span style="color:red;font-size:40px;">Question added successfully .... </span></br>
		
	<?php }
	
	?> 
	<?php
      if(isset($_REQUEST['notstored']))
	{
		?>
		<span style="color:red;font-size:40px;">please use right format question .... </span></br>
		
	<?php }
	
	?> 
	</center>
</body>
</html>