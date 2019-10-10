<?php
 session_start();
  if(!isset($_SESSION["connected"]))
          header("Location:login.php?login=1");
  	$con=mysqli_connect('localhost','root',"","onlineexam") or die("database error");
      $quss="select *from quiz";
     $results=mysqli_query($con,$quss);
	$num=mysqli_num_rows($results);
  
  ?>


<head>
  
  <title>Instuctions</title>
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
					<div >
					<h1 >Welcome <?php  echo $_SESSION["names1"]; ?></h1>
					</div>
<center> <h1 style="color:red ;font-size:80px;">Online Exam Portal</h1></center>
  <br>
  <br>
  
   <div class="container">
  <div style="background:white;border-style:solid;">



        <h2 class="card-text" style="color: black;text-align:left">Please read thr following instruction very carefully:</h2>
        <h4 class="card-text" style="color: black;text-align:left;">1. This is a multiple choice Test and contains <?php echo $num?> question to be answered in <?php echo $num?> minutes.</h4>
        <h4 class="card-text" style="color: black;text-align:left;">2. The Question Paper consists of multiple choice objective type questions with 4 options out of which only 1 is correct.</h4>
        <h4 class="card-text" style="color: black;text-align:left;">3. Each Question have 4 marks for right answer.There will be no negative marks for wrong answer.</h4>
         <h4 class="card-text" style="color: black;text-align:left;">4. There is a TIMER (Clock) available on the TOP RIGHT HAND CORNER of the Screen  you are requested to keep an eye on it for knowing the time remaining for the completion of the exam. </h4>
          <h4 class="card-text" style="color: black;text-align:left;">5. Only one question will be displayed on the computer screen at a time. To move back and forth between questions, candidates should click on the question number on the right handside of the computer screen where question numbers would be displayed along with the 'attempted' and 'not attempted' status.</h4>
       <h4 class="card-text" style="color: black;text-align:left;">6. The questions can be answered in any order within the given time frame. In case, the candidate does not wish to attempt any question, it can be left blank.  </h4>
       <h4 class="card-text" style="color: black;text-align:left;">7. The candidate can submit the test anytime by clicking on SUBMIT Button, showing on bottom right side. But once you submit your answer can't start exam again.  .</h4>
       <h4 class="card-text" style="color: black;text-align:left;">8. To start Exam click on START QUIZ.</h4>
      <h4 class="card-text" style="color: black;text-align:left;">9. DON'T Referse the page during the examination.</h4>
      
      </div>
    </div>


   <br>
   
 
   
                	<div class="row">
					<div class="col-sm-1">			 	
		    		
				  </div>
                  <div class="col-sm-3">			 	
		    		<a href="login.php" class="btn btn-info" role="button">Back to login </a>
				  </div>
				    <div class="col-sm-5">			 	
				
				  </div>
					   
               <div class="col-sm-3">  
					<div >
					<a href="instructionform.php" class="btn btn-info" role="button">START QUIZ</a>
					</div>
               </div>
	          </div>
	       

 </body>
