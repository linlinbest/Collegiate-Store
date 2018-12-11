<?php

$host = '127.0.0.1';
$dbuser = 'root';
$pw ="";
$dbname = 'php';

$db = new mysqli($host,$dbuser,$pw,$dbname);

if($db->connect_errno <> 0){
    echo "connections failed";
    echo $db->connect_error;
}


header("save.php");

?>