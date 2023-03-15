<?php

require("./conn.php");

$users = $connection->query("INSERT INTO users (id, name, email) 
VALUES('".$_POST['codigo']."', '".$_POST['nome']."', '".$_POST['email']."')");
echo json_encode("Sucesso!");
?>