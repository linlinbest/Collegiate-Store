<?php 
 
 include("connect.php");

 header("Content-Type:text/html;charset=utf-8"); 
 session_start(); 
 if(isset($_POST['login'])) 
 { 
  $username = trim($_POST['username']); 
  $password = trim($_POST['password']); 
  
  $order = "SELECT * FROM msg WHERE user = '{$username}' "; 
  $correct = $db->query(order);
  $correct_password = $correct->fetch_array( MYSQLI_ASSOC );


  if(($username=='')||($password== $coorect_password['password'])) 
  { 
   header('refresh:1;url=login.html'); 
   echo "username or password can not be empty"; 
   exit; 
  } 
  else if(($username!='username')||($password!='password')) 
  { 
   //if the user name or the password is not correct
   header('refresh:1;url=login.html'); 
   echo "wrong password "; 
   exit; 
  } 
  else if(($username=='username')&&($password=='password')) 
  { 
   //after the password and the username is correct  
   $_SESSION['username']=$username; 
   $_SESSION['islogin']=1; 
   //if stlled login we can choose yes
   if($_POST['remember']=="yes") 
   { 
    setcookie("username",$username,time()+7*24*60*60); 
    setcookie("code",md5($username.md5($password)),time()+7*24*60*60); 
   } 
   else
   { 
    setcookie("username",'',time()-1); 
    setcookie("code",'',time()-1); 
   } 
   //go back to the  index php 
   header('refresh:3;url=index.php'); 
  } 
 } 
?>