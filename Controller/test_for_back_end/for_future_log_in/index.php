<?php 
 header("Content-Type:text/html;charset=utf-8"); 
 session_start(); 
 //test cookie  
 if(isset($_COOKIE['username'])) 
 { 
  $_SESSION['username']=$_COOKIE['username']; 
  $_SESSION['islogin']=1; 
 } 
 if(isset($_SESSION['islogin'])) 
 { 
  //You have already loged in 
  echo $_SESSION['username']."hello, welcome to the private center<br/>"; 
  echo "<a href='logout.php'>delete</a>"; 
 } 
 else
 { //for log in 
  echo "you haven't logged in <a href='login.html'>log in</a>"; 
 } 
?>