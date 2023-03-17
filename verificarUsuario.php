<?php

require("./conn.php");

$users = $connection->query("SELECT * FROM users WHERE id = ".$_POST['id']);

foreach($users as $users){
    echo json_encode(false);
    die();
}
echo json_encode(true);
    die();
?>