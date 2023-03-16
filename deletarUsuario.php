<?php

require("./conn.php");

$users = $connection->query("DELETE FROM users WHERE id = ".$_POST['id']);

echo json_encode("Sucesso!");
?>