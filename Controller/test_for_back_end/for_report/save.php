<?php

include ('input.php');
include ('connect.php');

$last_name = $_POST['last_name'];
$first_name = $_POST['first_name'];
$mail = $_POST['mail'];
$address1 = $_POST['address'];
$address2 = $_POST['address2'];
$content = $_POST['content'];


$input = new input();

$jdg = $input->post($last_name);
if($jdg == false){
    die("Please enter your last name");
}

$jdg = $input->post($first_name);
if($jdg == false){
    die("Please enter you first name");
}

$jdg = $input->post($mail);
if($jdg == false){
    die("Please enter the correct e-mail address");
}

$jdg = $input->post($address1);
if($jdg == false){
    die("Please enter your address");
}


$jdg = $input->post($content);
if($jdg == false){
    die("Please enter you advice");
}


$order = "INSERT INTO msg (name,mail,address, content, time) 
           values
           ('{$first_name}'.'{$last_name}','{$mail}','{$addreess}','{$content}','{$time}');";

$jdg = $db->query($order);

if($jdg == false){
    die("fail to write into the database;");
}


$order = "SELECT * FROM msg ORDER BY intime DESC;";
$values=$db->query($order);

if($values == false){
    die("fail to find");
}

$container = [];

while ($row = $values->fetch_array( MYSQLI_ASSOC )){ //using the while loop to iterate it
    $container[] = $row; //you can directly by default to add $row and it can increment by itself 
}

header("report.html");
?>