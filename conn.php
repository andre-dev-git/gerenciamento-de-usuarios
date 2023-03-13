<?php

require "Connection.php";

$connection = new Connection();
$array = [
    "foo" => "bar",
    "bar" => "foo",
];
echo json_encode($array)
?>