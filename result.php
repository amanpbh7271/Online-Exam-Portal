
<?php
    session_start();
	  if(!isset($_SESSION["connected"]))
          header("Location:login.php?login=1");
	
	$con=mysqli_connect('localhost','root',"","onlineexam") or die("database error");

	 $em= $_SESSION["email"];
    $em1=substr_replace($em ,"",-10);

	 $attemtques=0;
	 $rightques=0;
     $wrongques=0;
     $notattempt=0;	
	
   $q="select $em1 from result";
	$status=mysqli_query($con,$q) or die(header("Location:login.php"));
	$num=mysqli_num_rows($status);
	 
	
	
	for($i=1;$i<=$num;$i++)
    {
    
    $row=mysqli_fetch_array($status);
    if($row[$em1]!=0)  
	{
		$answer[$i]= $row[$em1];
	    $attemtques++;
	}
	 else
      $answer[$i]=0;		 
   }


  
  $qu="select *from quiz";
  $result=mysqli_query($con,$qu);
  
    $q="select $em1 from result";
	$status=mysqli_query($con,$q) or die("error");
  
  
//for right and wrong qus
  for($i=1;$i<=$num;$i++)
  {
    $row=mysqli_fetch_array($result);
	$row1=mysqli_fetch_array($status);

    if($row['rightoption']==$row1[$em1])
    {
      $rightques++;
	  $forcheack[$i]=2;     
	}
	 else if($row1[$em1]=='0'){
		 $forcheack[$i]=0;
		 $notattempt++;
		 
      }
      else{
		  $forcheack[$i]=1;
           $wrongques++;  
            
    }
  $rightcolor[$i]=$row['rightoption'];
  $markcolor[$i]=$row1[$em1];
  }
 /*echo "attempted question is ".$attemtques;
 echo "right answr is" .$rightques;
 echo "wrong anser is" .$wrongques;
 */


 mysqli_close($con);
 ?>
 
 
 <!DOCTYPE html>
 
 <html>
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
   <?php	
	 $con=mysqli_connect('localhost','root',"","onlineexam") or die("database error");
   		$q ="select *from quiz ";
		 $result=mysqli_query($con,$q);
          $num=mysqli_num_rows($result);		 
		 
	     mysqli_close($con);
    ?>
	
	
	
 <style>
.green {
  background-color: LightGreen ;
 }
 
.red{
  background-color:Tomato;
}	
</style>	
	
	
	</head>
	
   <body style="background:LightGray;">
       <div class="container" style="background-color:orange;  " >
   <div class="row" >
           <div class="col-sm-3">  
					<div >
					<h1 >Welcome <?php  echo $_SESSION["names1"]; ?></h1>
					</div>
           </div>
		   <div class="col-sm-6">  
					<div >
					<h1 >online exam portal</h1>
					</div>
           </div>
	       <div class="col-sm-3">  
					<br>
					<br>
					<div >
					<label><button class="btn btn-default"	onclick="window.location.href='logout.php'" value="Logout" style="">Logout</button></label>
					</div>
           </div>
	</div>
</div>
	   <br>
	   <br>
	   <br>
	   
	   <div class="row" >

	   <div class="col-sm-3">
             <div>
               <label class="form-control"> Your Results : </label>
             </div>
			 <div>
               <label class="form-control">Total  Question is <?php echo $num ?> </label>
             </div>			 
			
			<div>
               <label class="form-control">Attemted Question is <?php echo $attemtques ?> </label>
             </div>
                        <div>
               <label class="form-control">Right Question is <?php echo $rightques ?> </label>
             </div>
            <div>
               <label class="form-control">Wrong Question is <?php echo $wrongques ?> </label>
             </div>			 
			 <div>
               <label class="form-control">Not Attemted Question is <?php echo $notattempt ?> </label>
             </div>			 
			<div>
               <label class="form-control">Total marks is <?php echo 4* $rightques ?> </label>
             </div>
		</div>
			
			 <div class="col-sm-6">
			 
	   <?php 
			    for($i=1;$i<=$num;$i++)
				{
                 					
					$row=mysqli_fetch_array($result);
			    ?>
			  <div id="ques<?php echo $i;?>" >	
			  
			  <div style="background:white;border-style:solid;">
			  <div>
		<?php if($forcheack[$i]==0)	{ ?> <label id="q" for="questions"   ><div   > <p  style="background-color:yellow;" id="ques<?php echo $i; ?>"><?php echo $i; echo $row['qus'];?></p></div></label>
		<?php } ?>
	    <?php if($forcheack[$i]==1)	{ ?><label id="q" for="questions"   > <p  style="background-color:red;" id="ques<?php echo $i; ?>"><?php echo $i; echo $row['qus'];?></p></label>
		<?php } ?>
		<?php if($forcheack[$i]==2)	{ ?><label id="q" for="questions"   > <p  style="background-color:green;" id="ques<?php echo $i; ?>"><?php echo $i; echo $row['qus'];?></p></label>
		<?php } ?>		

			  </div>
			  
		 	   <div class="radio">		
		    	 <label  class="form-control" id="op1<?php echo $i; ?>"><input style="background-color:blue;color:blue "  disabled  type="radio" value="1" name="optradio<?php echo $i; ?>" ></input><?php  echo $row['op1'];?></label>
			    </div>
			
			  <div class="radio">
			   <label  class="form-control"   id="op2<?php echo $i;?>" ><input  disabled   type="radio" value="2" name="optradio<?php echo $i; ?>" ></input><?php  echo $row['op2'];?></label>
			  </div>
			
			<div class="radio">
			  <label  class="form-control" id="op3<?php echo $i;?>" ><input type="radio" disabled   value="3" name="optradio<?php echo $i; ?>"  ></input><?php  echo $row['op3'];?></label>
			 </div>

			 <div class="radio ">
			  <label  class="form-control" id="op4<?php echo $i; ?>" ><input type="radio" disabled  value="4" name="optradio<?php echo $i; ?>" ></input><?php  echo $row['op4'];?></label>
			 
			 </div>
                 </div>	        
			</div>
			<?php
				
				}
				?>            

			
       </div>
	   	   <div class="col-sm-3">
              <div>
               <label class="form-control" >Instructions :-</label>
             </div>
			 <div>
               <label class="form-control" style="background-color:green">Your Right Question in green</label>
             </div>
			 <div>
               <label class="form-control" style="background-color:yellow">Not Attemted Question in yellow </label>
             </div>			 
			
			<div>
               <label class="form-control" style="background-color:red">Wrong Question is in red</label>
             </div>
                        <div>
               <label class="form-control" style="background-color:LightGreen">Right Answer is lightgreen </label>
             </div>
            <div>
               <label class="form-control" style="background-color:Tomato">Attemted Wrong Answer in tomato </label>
             </div>		 

	   
	   </div>
      
	  
	  <script>
      $(document).ready(function(){







	  <?php    
     		 for($i=1;$i<=$num;$i++)
			  {
          ?>  
		  <?php  if( ($markcolor[$i] =='1') && ($markcolor[$i]!=$rightcolor[$i])) {	?>			
				 $("#op1<?php echo $i ?>").addClass("red");
		  <?php }  ?> 
		  <?php	 if(($markcolor[$i] =='2') && ($markcolor[$i]!=$rightcolor[$i])) { ?>				
				 $("#op2<?php echo $i ?>").addClass("red");
			
			<?php } ?> 
			<?php if(($markcolor[$i] =='3') && ($markcolor[$i]!=$rightcolor[$i])) { ?>				
				 $("#op3<?php echo $i ?>").addClass("red");
	
        	<?php } ?> 
	<?php  if(($markcolor[$i] =='4') && ($markcolor[$i]!=$rightcolor[$i]) ) { ?>				
				 $("#op4<?php echo $i ?>").addClass("red");
				  
			  <?php } ?>		
		
		<?php } ?>
          	  
             		<?php    
     		 for($i=1;$i<=$num;$i++)
			  {
          ?>  
		  <?php  if( $rightcolor[$i] =='1') {	?>			
				 $("#op1<?php echo $i ?>").addClass("green");
		  <?php } ?> 
		  <?php		  if( $rightcolor[$i]=='2') { ?>				
				 $("#op2<?php echo $i ?>").addClass("green");
			
			<?php } ?> 
			<?php	 if($rightcolor[$i] =='3') { ?>				
				 $("#op3<?php echo $i ?>").addClass("green");
	
	<?php } ?>  
	<?php  if( $rightcolor[$i] =='4') { ?>				
				 $("#op4<?php echo $i ?>").addClass("green");
				  
			  <?php } ?>		
			  <?php } ?>
	  
	
	});
	     	    

</script>



 </body>
 
 
 
 </html> 