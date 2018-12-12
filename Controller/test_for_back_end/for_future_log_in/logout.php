<?php 
 header("Content-Type:text/html;charset=utf-8"); 
 session_start(); 
 //clear the memory 
 $username=$_SESSION['username']; 
 $_SESSION=array(); 
 session_destroy(); 
 //delete the cookie 
 setcookie("username",'',time()-1); 
 setcookie("code",'',time()-1); 
 echo "$username,see you next time "; 
 echo "agia <a href='login.html'>login</a>"; 
?>