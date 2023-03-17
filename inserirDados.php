<?php

require("./conn.php");

$deleteColor = $connection->query("DELETE from user_colors WHERE user_id = ".$_POST['codigo']);

$setColor = $connection->query("INSERT INTO user_colors (user_id, color_id) 
VALUES (".$_POST['codigo'].",".$_POST['cor'].")");

$users = $connection->query("INSERT INTO users (id, name, email) 
VALUES('".$_POST['codigo']."', '".$_POST['nome']."', '".$_POST['email']."')");
echo json_encode("Sucesso!");
?>