<?php
     session_start();
	  if(!isset($_SESSION["connected"]))
          header("Location:login.php?login=1");
	   $em= $_SESSION["email"];
	       $con=mysqli_connect('localhost','root',"","onlineexam") or die("database error");
        $qs="select times from users where email='$em'";
    $status=mysqli_query($con,$qs) or die("error");
	    $rowqs=mysqli_fetch_array($status);
	    $time=$rowqs['times'];
	  mysqli_close($con);
	$con=mysqli_connect('localhost','root',"","onlineexam") or die("database error");	
	?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>quiz</title>
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
 
 <script type="text/javascript">
  function timeout()
  {
     var minute=Math.floor(timeleft/60);
	 var second=timeleft%60;
	 var mint=checktime(minute);
	 var sec=checktime(second);
      if(timeleft<=0)
	  {
		  clearTimeout(tm);
		 
		  document.getElementById("form1").submit();
	  }
      else
	  {
         document.getElementById("time").innerHTML=mint+":"+sec;
	  }
      timeleft--;
	  var tm=setTimeout(function(){timeout()},1000);
  }
    function checktime(msg)
	{
	  if(msg<10)
	  {
	    msg="0"+msg;
	  }
	  return msg;
	}
	</script>  
  
  
  
 <?php
	    
		 $con=mysqli_connect('localhost','root',"","onlineexam") or die("database error");
   		$q ="select *from quiz ";
		 $result=mysqli_query($con,$q);
          $num=mysqli_num_rows($result);		 
		 
	     mysqli_close($con);		 
 ?>
  
 <style>
.green {
  background-color:green;
 }
</style>
</head>

<body style="background:LightGray;" onload="timeout()">
<div class="container" style="background-color:orange; border:solid" >
   <div class="row" >
           <div class="col-sm-3">  
					<div >
					<h3 > <?php  echo $_SESSION["names1"]; ?> Your Exam Going On..</h3>
					</div>
           </div>
		   <div class="col-sm-6">  
					<div >
					<h1 style="font-size:40px;">Online Exam Portal</h1>
					</div>
           </div>
		   <script type="text/javascript">
		           var current_time=parseInt(new Date().getTime()/1000);
				   var start_time=<?php echo $time; ?>;
				   var timess=<?php echo $num; ?>*60;
				   var timeleft= timess-(current_time-start_time);
			        
			 //var timeleft=4*60;
		   </script>
	       <div class="col-sm-3">  
		            <div >
					<h1 id="time">Time </h1>
					</div>
					
					<div>
					<label><button  onclick="window.location.href='logout.php'" value="Logout" >Logout</button></label>
					</div>
           </div>
	</div>
</div>
<br>
<br>
<div class="container">
  
  <div class="row">
            
			  
				<div class="col-sm-2">	
            <label  class="form-control">Questions:</label>
			<div style="background-color:white ;border:solid">			
			
			<div class="btn-group">
				 <?php 
				    for($i=1;$i<=$num;$i++) {
					?>
	              <?php if($i<10) { ?>    		
    		     	<button type="button" class="btn btn-primary"   id="<?php echo $i; ?>" value="<?php  echo $i; ?>" onclick="cheack(<?php echo $i; ?>);" ><?php echo 0;echo $i; ?></button>
		    		<?php	}?>
                   <?php if($i>9) { ?>    		
    		     	<button type="button" class="btn btn-primary"   id="<?php echo $i; ?>" value="<?php  echo $i; ?>" onclick="cheack(<?php echo $i; ?>);" ><?php echo $i; ?></button>
		    		<?php	}?>

                      				  
					<?php	}?>
					</div>
				</div>  
				  </div>
    
   
   <div class="col-sm-6" style="background-color:white;border:solid">
            <form onsubmit="if(!confirm('Are You sure for submit test?')){return false;}" action="quizform.php" method ="POST" id="form1"> 	         
			 <?php 
			    for($i=1;$i<=$num;$i++)
				{
					 $row=mysqli_fetch_array($result);
			    ?>
			  <div id="ques<?php echo $i;?>" >	
			  <div>
			  <label id="q" for="questions"   > <p  style="font-size:15px"><?php echo $i; echo "."; ?><?php  echo $row['qus'];?></p></label>
			   </div>
			  
		 	   <div class="radio">		
		    	 <label  class="form-control"><input id="op1" type="radio" value="1" name="optradio<?php echo $i; ?>" ></input><?php  echo $row['op1'];?></label>
			    </div>
			
			  <div class="radio">
			   <label  class="form-control"><input  id="op2" type="radio" value="2" name="optradio<?php echo $i; ?>" ></input><?php  echo $row['op2'];?></label>
			  </div>
			
			<div class="radio">
			  <label  class="form-control"><input type="radio" id="op3" value="3" name="optradio<?php echo $i; ?>"  ></input><?php  echo $row['op3'];?></label>
			 </div>

			 <div class="radio ">
			  <label  class="form-control"><input type="radio" id="op4" value="4" name="optradio<?php echo $i; ?>" ></input><?php  echo $row['op4'];?></label>
			 
			 </div>
                 </div>	        
			<?php
				
				}
				?>  
	
             	<div class="row">
                  <div class="col-sm-10">			 	
						<div class="button">
					   <label ><input type="button" class="btn btn-default" style="background:green;color:white " id="prev" value="Previous" onclick="forpre();"></input></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					   <label><input type="button" class="btn btn-default" style="background:green;color:white " id="next" value="Next" onclick="fornext();"> </input></label>
					   </div>
				  </div>	   
					   
               <div class="col-sm-2">  
					<div >
					<label><button class="btn btn-default" style="background:green;color:white "  type="submit" value="Submit" >Submit</button></label>
					</div>
               </div>
	          </div>
	    </form>
	  </div>
	       
					<div class="col-sm-4">
					<label  class="form-control"> Instructions:</label>
					<span class="label label-primary" style="background-color:green " >Attempted</span> &nbsp &nbsp
                    <span class="label label-success" style="background-color:SteelBlue">Not Attempted</span>

					  </div>
       
</div>
</div>


<script>
           var x=1;
		  
      $(document).ready(function(){
		      
                
			  <?php $i=1;  ?>   
                   $("#ques<?php echo $i?>").show();
				   <?php for($i=2;$i<=$num;$i++) { ?>   
				   $("#ques<?php echo $i?>").hide();
				    <?php } ?>					 

    				 $("#prev").hide();
                   
				   
				 
                
               <?php for($i=1;$i<=$num;$i++) { ?>  
               	$("#<?php echo $i ?>").click(function(){
                   <?php for($j=1;$j<=$num;$j++) { ?>
				   
				   $("#ques<?php echo $j ?>").hide();	             
				   <?php } ?>
				 
				  if(x==<?php echo $i ?>)
					{  						
   				  $("#ques<?php echo $i ?>").show();
					}
					if(<?php echo $i ?>==1){
				   $("#prev").hide();			  
				   $("#next").show();
					}
				   else if(<?php echo $i ?>==<?php echo $num ?>){	
                      $("#prev").show();			  
				     $("#next").hide();
				    				 
				  }
				  else{
				  	  
				  $("#prev").show();			  
				     $("#next").show();
				  }
			   });				
	  <?php } ?>
				 
	     $("#prev").click(function() {
		 <?php for($i=1;$i<=$num;$i++) { ?>  
			  if(x!=<?php echo $i ?>)
			  $("#ques<?php echo $i ?>").hide();
		       else
				   $("#ques<?php echo $i ?>").show();
		 <?php } ?>
		    if(x==1)
			{
		 $("#prev").hide();
			 $("#next").show();

			}				
		else if(x==<?php echo $num ?>)
			{
			 $("#prev").show();
			 $("#next").hide();
			}  
          else
		  {
		  $("#next").show();
		  $("#prev").show();
		  }			  
		});

		$("#next").click(function() {
		 <?php for($i=1;$i<=$num;$i++) { ?>  
			  if(x!=<?php echo $i ?>)
			  $("#ques<?php echo $i ?>").hide();
		       else
				   $("#ques<?php echo $i ?>").show();
		 <?php } ?>
		    if(x==1)
			{
		 $("#prev").hide();
			 $("#next").show();

			}				
		else if(x==<?php echo $num ?>)
			{
			 $("#prev").show();
			 $("#next").hide();
			}  
          else
		  {
		  $("#next").show();
		  $("#prev").show();
		  }			  
		});

		$("#op1,#op2,#op3,#op4").click(function(){
      
     <?php for($i=1;$i<=$num;$i++) { ?>
	if(x==<?php echo $i?>){

	$("#<?php echo $i?>").addClass("green");
    }
    <?php	} ?> 
	
 });
 });
 

 
 
 
 
  function cheack(p)
 {
    x=p;
	
 };
 function forpre()
 {
   x=x-1;
   if(x==1)
	   x=1;
   else if(x==<?php echo $num ?> )
       x=<?php echo $num ?>;
 
  
 };
  function fornext()
 {
   x=x+1;
    if(x==1)
	   x=1;
   else if (x==<?php echo $num?> )
       x=<?php echo $num?> ;

  
   };
</script>

</body>
</html>