<?php

include ('input.php');
include ('connect.php');


//include ('connect.php');
$content = $_POST['content'];
$user = $_POST['user'];

$input = new input();

$jdg = $input->post($content);
if($jdg == false){
    die("wrong cotent information");
}

$jdg = $input->post($user);
if($jdg == false){
    die("wrong user name");
}

//var_dump($content, $user);
 
//connection for the sql 

//$db->query("SET NAMES UTF8;");

$time = time();
$order = "INSERT INTO msg (content,user,intime) values ('{$content}','{$user}','{$time}');";
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


?>



<!DOCTYPE html>

<html>

<head>
<meta charset="UTF-8">
<title>html send php get</title>
</head>


<body>
<form action = "save.php" method = "post">
    <input type='text' name = "content"/>
    <input type='text' name = "user"/>
    <input type = 'submit' value = 'submit'/>
</form>

<?php
    foreach($container as $n ){
?>
        <div>
            <?php  echo $n['user']?>
            <?php echo $n['content'] ?>
        </div>
<?php
    }
?>




</body>

</html>