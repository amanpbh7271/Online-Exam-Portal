<?php

   session_start();
   if(!isset($_SESSION["connected"]))
          header("Location:login.php?login=1");
   $em= $_SESSION["email"];
   $em1=substr_replace($em ,"",-10);
   echo $em1;
   $timestamp = time(); 

   $con=mysqli_connect('localhost','root',"","onlineexam") or die("database error");
   $q="update users set status='1' , times='".$timestamp."' where email='$em'";
   
   $status=mysqli_query($con,$q)or die( header("Location:login.php ?erremail=1;")); 
   $q1="alter table result add $em1 varchar(20);";


   $status=mysqli_query($con,$q1)or die(header("Location:login.php ?erremail=1;")); 
   
     header("Location:quiz.php");   
   
   
   
   
?>