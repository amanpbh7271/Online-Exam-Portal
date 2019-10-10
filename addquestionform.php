<?php
 $con=mysqli_connect('localhost','root',"","onlineexam") or die("database error");

 
	 session_start();
            if(!isset($_SESSION["connected"]))
               header("Location:login.php?login=1");		
		$con=mysqli_connect('localhost','root',"","onlineexam") or die("database error");
   		$q1 ="select *from quiz ";
		 $result=mysqli_query($con,$q1);
          $num=mysqli_num_rows($result);		 
		 $num=$num+1;
	     
   if(isset($_POST['question'])!=NULL)
  {	
	$question=$_POST['question'];
	echo $question;
	 $option1=$_POST['option1'];
echo $option1;	
	$option2=$_POST['option2'];
echo $option2;
	$option3=$_POST['option3'];
   
echo $option2;
   $option4=$_POST['option4'];
	
	echo $option4;
	$right=$_POST['right'];
     echo $right;
	 $q="insert into quiz(id,qus,op1,op2,op3,op4,markoption,rightoption) values($num,'$question','$option1','$option2','$option3','$option4','0','$right')"; 
     $status=mysqli_query($con,$q) or die("Location:addquestion.php?notstored=1");
     $s="insert into result(id,rightoption) values($num,'$right')";
	 $st=mysqli_query($con,$s) or die("Location:addquestion.php?notstored=1");
    header("Location:addquestion.php?stored=1");
	 }
	 else
	  header("Location:addquestion.php?notstored=1");	 
	 ?>